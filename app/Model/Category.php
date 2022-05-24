<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Posts() {

        return $this->belongsToMany("App\Post");
    }

    protected $fillable = ['name', 'color'];
}
