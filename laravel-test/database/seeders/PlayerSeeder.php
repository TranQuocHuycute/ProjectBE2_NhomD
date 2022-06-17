<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $urlCategories = 'https://api.sofascore.com/api/v1/team/33124/transfers';
        $categories = file_get_contents($urlCategories);

        $categories = json_decode($categories);

        foreach ($categories->transfersIn as $index => $player) {

            DB::table('players')->insert([
                'id' => $player->player->id,
                'name' => $player->player->name,
                'slug' => $player->player->slug,
                'shortName' => $player->player->shortName,
                'position' => $player->player->position,
                'userCount' => $player->player->userCount,
                'flags' => "https://www.sofascore.com/static/images/flags/vn.png",


            ]);
        }
    }
}
