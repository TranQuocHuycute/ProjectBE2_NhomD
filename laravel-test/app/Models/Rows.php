<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rows extends Model
{
    use HasFactory;
    protected $table = "rows";
    protected $primaryKey = 'id';

    static function destroy($id)
    {
        self::where("team_id","=",$id)->delete();
    }

}
