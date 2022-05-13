<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function products (){
        //tên model là số ít tên bảng là số nhiều
        return $this->belongsToMany(Catregory::class);
    }
}
