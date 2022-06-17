<?php

namespace Database\Seeders;

use App\Models\seasons;
use Exception;
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
        foreach (seasons::all() as $seasion) {

            $urlRows = 'https://api.sofascore.com/api/v1/unique-tournament/' . $seasion->tournaments_id . '/season/' . $seasion->id . '/standings/total';
            try {
                $_rows  = file_get_contents($urlRows);

                $rows  = json_decode($_rows);
                if (!!$rows) {
                    foreach ($rows->standings as $standing) {
                        foreach ($standing->rows as $row) {
                            try {
                                DB::table('teams')->insert([
                                    'id' => $row->team->id,
                                    'name' => $row->team->name,
                                    'shortName' => $row->team->shortName,
                                    'gender' => $row->team->gender,
                                    'userCount' => $row->team->userCount,
                                    'nameCode' => $row->team->nameCode,
                                    'national' => $row->team->national,
                                    'type' => $row->team->type,
                                    'tournaments_id' => $seasion->tournaments_id,
                                    'seasons_id' => $seasion->id,
                                    'slug' => $row->team->slug
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
