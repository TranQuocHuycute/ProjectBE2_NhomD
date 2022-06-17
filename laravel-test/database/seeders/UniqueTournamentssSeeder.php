<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniqueTournamentssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // lay id tu
         foreach (category::all() as $category) {

            $urlTournaments = 'https://api.sofascore.com/api/v1/category/' . $category->id . '/unique-tournaments';
            $tournaments  = file_get_contents($urlTournaments);
            $tournaments  = json_decode($tournaments);

            foreach ($tournaments->groups[0]->uniqueTournaments as $tournaments) {
                if(isset( $tournaments->alpha2)){
                    DB::table('unique_tournamentsses')->insert([
                        'id' => $tournaments->id,
                        'name' => $tournaments->name,
                        'category_id' => $tournaments->category->id,
                        'alpha2' => $tournaments->alpha2,
                        'slug' => $tournaments->slug,
                    ]);
                }else{
                    DB::table('unique_tournamentsses')->insert([
                        'id' => $tournaments->id,
                        'name' => $tournaments->name,
                        'category_id' => $tournaments->category->id,
                        'alpha2' => "",
                        'slug' => $tournaments->slug,

                    ]);
                }


            }
        }

    }
}


