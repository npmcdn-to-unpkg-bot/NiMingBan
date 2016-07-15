<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    public $timestamps = false;

    public function parent() {
        return $this->belongTo("\App\Board");
    }

    public function subboards(){
        return $this->hasMany("\App\Board");
    }
}
