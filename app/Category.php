<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    //Relacion 1 a N
    public function posts(){
        return $this->hasMany('app\Post');

    }
}
