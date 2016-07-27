<?php

namespace App\Http\Controllers\api\v1;

use Log;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;

class PostController extends Controller
{

    public function index(Request $request){
        // get list
        $board_id = $request->input("board_id");

        $result = [];
        $result["data"] = [];
        $result["paginate"] = [];

        // 获取分页器对象
        $post_list_obj = Post::with(["user"])
            ->whereNull("post_id")
            ->where("board_id", $board_id)
            ->orderBy("updated_at", "desc")
            ->paginate(15);


        $current_page = $post_list_obj->currentPage();
        $pages = $post_list_obj->lastPage();

        $result["paginate"]["current_page"] = $current_page;
        $result["paginate"]["pages"] = $pages;


        foreach ($post_list_obj as $post_obj) {
            $post_obj->subs = $post_obj->get_preview_subs();
            array_push($result["data"], $post_obj);
        }

        return $result;
    }

    public function store(Request $request){
        // post create
        // $input = $request->all();
        $data = [];
        // return Post::create($input)->toJson();
        if($request->has("allFiles")){
            $img_b64_p = $request->input("allFiles.0");
            $img_b64 = substr($img_b64_p, strpos($img_b64_p, ","));
            $image_bytes = base64_decode($img_b64);

            $disk = \Storage::disk('qiniu');

            $file_name = str_replace(".", "", gettimeofday(true)) . ".png";

            $put_result = $disk->put($file_name, $image_bytes);

            if (!$put_result) {
                return [
                    "status" => false,
                    "error" => "图片上传失败"
                ];
            }
            $download_url = $disk->getDriver()->downloadUrl($file_name);

            // unset($input["allFiles"]);
            $data["image"] = $download_url;
        }else {
            $data["image"] = null;
        }


        if ($request->input("post_id", "0") != "0") {
            $data["post_id"] = $request->input("post_id", "0");
        }
        // $request->input("board_id")
        $data["title"] = $request->input("title", null);
        $data["email"] = $request->input("email", null);
        $data["nickname"] = $request->input("nickname", null);
        $data["content"] = $request->input("content", "");
        $data["board_id"] = $request->input("board_id", null);
        $data["user_id"] = $request->input("user_id", null);

        return Post::create($data)->toJson();
        // return $data;
    }

    public function update(Request $request){
        // put/patch update
        $input = $request->all();
        return Post::update($input)->toJson();
    }

    public function show(Request $request, $id){
        $result = [];
        $result["data"] = [];
        $result["paginate"] = [];

        $post_obj = Post::where("id", $id)->first();
        $post_sub_obj_list = $post_obj
                                ->subposts()
                                ->orderBy("created_at", "desc")
                                ->paginate(15);
        $sub_list = [];
        foreach ($post_sub_obj_list as $sub_obj) {
            array_push($sub_list, $sub_obj);
        }
        $post_obj->subs = $sub_list;
        array_push($result["data"], $post_obj);

        $current_page = $post_sub_obj_list->currentPage();
        $pages = $post_sub_obj_list->lastPage();

        $result["paginate"]["current_page"] = $current_page;
        $result["paginate"]["pages"] = $pages;

        return $result;

    }

}
