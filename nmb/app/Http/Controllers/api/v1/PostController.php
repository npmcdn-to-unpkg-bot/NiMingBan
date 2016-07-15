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
        $input = $request->all();
        return Post::create($input)->toJson();
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
