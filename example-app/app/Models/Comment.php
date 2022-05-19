<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function product (){
        //tên model là số ít tên bảng là số nhiều
        return $this->belongsTo(Product::class);
    }
}
