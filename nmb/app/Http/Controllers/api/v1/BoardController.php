<?php

namespace App\Http\Controllers\api\v1;

use Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Board;

class BoardController extends Controller
{
    public function index(){

        $boards = Board::with(["subboards" => function($query){
            $query->orderBy("order","asc");
        }])->whereNull("board_id")
        ->orderBy("order", "asc")->get();
        return $boards;
    }

}
