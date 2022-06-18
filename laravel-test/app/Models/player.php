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
     function update_data()
    {
        $id = $this->get('id');
        return DB::table('players')->update($id);
    }
}
