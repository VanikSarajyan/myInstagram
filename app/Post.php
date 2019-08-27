<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class); 
    }

    public function likes(){
        return $this->belongsToMany(User::class);
    }

    public function isLiked(){
        return auth()->user() ? auth()->user()->liked->contains($this->id) : false;
    }

}
