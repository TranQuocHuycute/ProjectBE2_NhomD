<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function categories (){
        //tên model là số ít tên bảng là số nhiều
        return $this->belongsToMany(Product::class);
    }
}
