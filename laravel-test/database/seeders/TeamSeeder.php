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


        // error_reporting(E_ERROR | E_PARSE);
        $urlCategories = 'https://api.sofascore.com/api/v1/sport/football/categories';
        // $urlCategories = 'https://api.sofascore.com/api/v1/unique-tournament/767/season/40050/standings/total';
        // https://api.sofascore.com/api/v1/category/366/unique-tournaments
        $categories = file_get_contents($urlCategories);

        $categories = json_decode($categories);
        foreach ($categories->categories as $category) {
            $urlTournaments = 'https://api.sofascore.com/api/v1/category/' . $category->id . '/unique-tournaments';
            $tournaments  = file_get_contents($urlTournaments);
            $tournaments  = json_decode($tournaments);
            foreach ($tournaments->groups[0]->uniqueTournaments as $tournaments) {
                $urlSeasion = 'https://api.sofascore.com/api/v1/unique-tournament/' . $tournaments->id . '/seasons';
                $seasions  = file_get_contents($urlSeasion);
                $seasions  = json_decode($seasions);
                foreach ($seasions->seasons as $seasions) {
                    $urlStandings = 'https://api.sofascore.com/api/v1/unique-tournament/' . $tournaments->id . '/season/' . $seasions->id . '/standings/total';
                    $standings  = file_get_contents($urlStandings);
                    if (!!$standings) {
                        $standings  = json_decode($standings);
                        foreach ($standings->standings as $standing) {
                            foreach ($standing->rows as  $row) {
                                var_dump($row);
                            }
                        }
                    }
                }
            }
        }


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
                'nameCode' => $team->team->nameCode,
                'national' => $team->team->national,
                'type' => $team->team->type,
            ]);
        }
    }
}
