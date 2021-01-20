<?php

namespace App;

use App\User;
use App\Lesson;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function lessons() {

        return $this->hasMany(Lesson::class);
        
    }

    public function users() {

        return $this->hasMany(User::class);

    }

    public $timestamps = false;
}
