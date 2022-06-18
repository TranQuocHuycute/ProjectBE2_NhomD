<?php

namespace Database\Seeders;

use App\Models\seasons;
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

        foreach (seasons::all() as $seasion) {
            try {
                $urlStandings = 'https://api.sofascore.com/api/v1/unique-tournament/' . $seasion->tournaments_id . '/season/' . $seasion->id . '/standings/total';

                $standings  = file_get_contents($urlStandings);
                if (!!$standings) {
                    $standings  = json_decode($standings);

                    foreach ($standings->standings as $standing) {
                        foreach ($standing->rows as  $row) {
                            try {
                                DB::table('rows')->insert([
                                    'team_id' => $row->team->id,
                                    'position' => $row->position,
                                    'losses' => $row->losses,
                                    'id' => $row->id,
                                    'matches' => $row->matches,
                                    'wins' => $row->wins,
                                    'draws' => $row->draws,
                                    'scoresAgainst' => $row->scoresAgainst,
                                    'points' => $row->points,

                                ]);
                            } catch (Exception $e) {
                                continue;
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                continue;
            }
        }
    }
}
