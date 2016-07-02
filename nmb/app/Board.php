<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    public $timestamps = false;

    public $appends = ["is_top"];

    public function parent() {
        return $this->belongTo("\App\Board");
    }

    public function subboards(){
        return $this->hasMany("\App\Board");
    }

    public function getIsTopAttribute(){
        return $this->board_id == null;
    }
}
