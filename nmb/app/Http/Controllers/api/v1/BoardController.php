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
    public function index(Request $request){
        $board_list = [];

        $boards = Board::whereNull("board_id")
            ->orderBy("order", "asc")
            ->get();
        foreach ($boards as $board) {
            array_push($board_list, $board);
            foreach ($board->subboards as $subboard) {
                array_push($board_list, $subboard);
            }
        }

        return response()->json(
            [
                "list" => $board_list
            ]
        );
    }

}
