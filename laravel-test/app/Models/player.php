<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class player extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    function get_all_data()
    {
        return DB::table('players')->get();
    }
    public function ratting()
    {
        return $this->belongsToMany(ratting::class);
    }
}
