<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RenderController extends Controller
{
    public function board(Request $request){
        $board_id = $request->input("board_id", 1);
        $page = $request->input("page", 1);
        $post_id = $request->input("post_id", 0);
        return view("post_list", [
            "board_id"=>$board_id,
            "page"=>$page,
            "post_id"=>$post_id
        ]
        );
    }
}
