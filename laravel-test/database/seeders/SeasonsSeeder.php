<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\uniqueTournament;
use App\Models\uniqueTournamentss;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SeasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (uniqueTournamentss::all() as $tournaments) {
            try {
                $urlSeasion = 'https://api.sofascore.com/api/v1/unique-tournament/' . $tournaments->id . '/seasons';
                $seasions  = file_get_contents($urlSeasion);
                if (!!$seasions) {
                    $seasions  = json_decode($seasions);
                    foreach ($seasions->seasons as $seasion) {
                        try {
                            DB::table('seasons')->insert([
                                'id' => $seasion->id,
                                'name' => $seasion->name,
                                'year' => $seasion->year,
                                'tournaments_id' => $tournaments->id
                            ]);
                        } catch (Exception $e) {
                            continue;
                        }
                    }
                }
            } catch (Exception $e) {
                continue;
            }
        }
    }
}
