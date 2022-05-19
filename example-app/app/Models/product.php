<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories (){
        //tên model là số ít tên bảng là số nhiều
        return $this->belongsToMany(Category::class);
    }
    public function comments (){
        //tên model là số ít tên bảng là số nhiều
        return $this->hasMany(Comment::class);
    }
}
