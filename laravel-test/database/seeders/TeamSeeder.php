<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
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

            DB::table('teams')->insert([
                'id' => $team->team->id,
                'name' => $team->team->name,
                'slug' => $team->team->slug,
                'shortName' => $team->team->shortName,
                'gender' => $team->team->gender,
                'userCount' => $team->team->userCount,
                'nameCode'=>$team->team->nameCode,
                'national' => $team->team->national,
                'type' => $team->team->type,
            ]);
        }
    }
}
