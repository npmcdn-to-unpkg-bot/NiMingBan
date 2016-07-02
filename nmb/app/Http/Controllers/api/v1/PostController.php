<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;

class PostController extends Controller
{

    protected $dates = ['created_at', 'updated_at'];


    public function index(Request $request){
        // get list
        return Post::with("subposts", "user")
            ->whereNull("post_id")
            ->orderBy("updated_at", "desc")
            ->paginate(15);
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

}
