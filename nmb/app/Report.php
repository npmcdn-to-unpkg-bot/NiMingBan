<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = ["created_at", "updated_at"];

    protected $fillable = ['content', "post_id"];

    public function report_post() {
        return $this->belongTo("\App\Post");
    }
}
