<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $urlCategories = 'https://api.sofascore.com/api/v1/team/44/standings/seasons';
        $categories = file_get_contents($urlCategories);

        $categories = json_decode($categories);


        // var_dump($categories) ; die;
        foreach ($categories->tournamentSeasons[0]->seasons as $index => $seasons) {

            DB::table('seasons')->insert([
                'id' => $seasons->id,
                'name' => $seasons->name,
                'year' => $seasons->year,
            ]);
        }
    }
}
