<?php

namespace App;

use Log;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    private $preview_subpost_count = 5;

    protected $guarded = ["created_at", "updated_at"];

    public $appends = ["hidden_count", "subs"];

    public function top_post() {
        return $this->belongTo("\App\Post");
    }

    public function subposts(){
        return $this->hasMany("\App\Post");
    }

    public function user(){
        return $this->belongsTo("\App\User");
    }

    public function getHiddenCountAttribute(){
        if (!is_null($this->post_id)) {
            return 0;
        }
        $all_count = $this->subposts()->count();
        if ($all_count > $this->preview_subpost_count) {
            return $all_count - $this->preview_subpost_count;
        }else{
            return 0;
        }
    }
    public function get_preview_subs(){
        return $this->subposts()
                    ->skip($this->hidden_count)
                    ->take($this->preview_subpost_count)
                    ->get();
    }

    private $subs = [];
    public function setSubsAttribute($value){
        $this->subs = $value;
    }
    public function getSubsAttribute($value){
        return $this->subs;
    }

}
