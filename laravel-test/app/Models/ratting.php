<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratting extends Model
{
    use HasFactory;
    public function player()
    {
        return $this->belongsToMany(player::class);
    }
}
