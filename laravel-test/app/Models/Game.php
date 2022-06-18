<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';
    protected $fillable = [
        'name',
        'country',
        'HomeTeamId',
        'HomeTeam',
        'AwayTeamId',
        'AwayTeam',
        'ScheduleDate',
        "HomeScore",
        "AwayScore",
        'IncidentID'
    ];
}