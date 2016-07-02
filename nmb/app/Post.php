<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function top_post() {
        return $this->belongTo("\App\Post");
    }

    public function subposts(){
        return $this->hasMany("\App\Post");
    }

    public function user(){
        return $this->belongsTo("\App\User");
    }

    protected $guarded = ["created_at", "updated_at"];
}
