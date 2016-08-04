<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Report;

class ReportController extends Controller
{
    public function store(Request $request){
        $post_id = $request->input("post_id", 0);
        $content = $request->input("content", "");

        // 对于重复请求举报按钮
        // 对于请求层面的防止过多请求
        // 以及数据层面防止产生过多的数据
        $report_obj = Report::create(["post_id"=>$post_id, "content"=>$content]);

        return $report_obj->toJson();
    }
}
