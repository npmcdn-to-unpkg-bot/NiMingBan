<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function subposts() {
        return $this->hasMany("\App\Post");
    }

    protected $guarded = ["created_at", "updated_at"];
}
