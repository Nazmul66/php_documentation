<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    function displayName () {
        echo $this->name . " : " . $this->email;
    }

    function posts() {
    //   return  $this->hasMany('App\Models\Post');
       return $this->hasMany(\App\Models\Post::class);
    }
}
