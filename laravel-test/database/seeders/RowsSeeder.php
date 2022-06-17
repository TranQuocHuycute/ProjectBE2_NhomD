<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $urlCategories = 'https://api.sofascore.com/api/v1/unique-tournament/626/season/40370/standings/total';
        $categories = file_get_contents($urlCategories);

        $categories = json_decode($categories);



        foreach ($categories->standings[0]->rows as $index => $team) {

            try {
                DB::table('rows')->insert([
                    
                    'position' => $team->position,
                    'matches' => $team->matches,
                    'wins' => $team->wins,
                    'draws' => $team->draws,
                    'scoresFor' => $team->scoresFor,
                    'scoresAgainst' => $team->scoresAgainst,
                    'points' => $team->points,

                ]);
            } catch (Exception $e)
            {
                continue;
            }
        }

        }
   }
