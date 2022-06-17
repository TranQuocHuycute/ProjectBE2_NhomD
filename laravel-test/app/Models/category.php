<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DateTime;

class category extends Model
{
   use HasFactory;
   protected $primaryKey = 'id';

   protected $fillable = [
      'name',
      'slug',
      'priority',
      'flag',
      'alpha2'
   ];


   static function get_all_data()
   {
      return DB::table('categories')->orderBy('name')->get();
   }
   static function insert($data)
   {
      $now = new DateTime();
      self::create([
         'name' => $data['name'],
         'slug' => $data['slug'],
         'priority' => $data['priority'],
         'flag' => $data['flag'],
         'alpha2' => $data['alpha2']
      ]);
   }
}
