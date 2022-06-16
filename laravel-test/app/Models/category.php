<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

 static function get_all_data(){
    return DB::table('categories')->get();
 }
 
}
