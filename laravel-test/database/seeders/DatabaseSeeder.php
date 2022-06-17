<?php

namespace Database\Seeders;

use App\Models\Rows;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        //$this->call(TeamSeeder::class);
        $this->call(UniqueTournamentssSeeder::class);
        $this->call(SeasonsSeeder::class);

        // $this->call(UniqueTournamentSeeder::class);
        // $this->call(
        //     PlayerSeeder::class,
        // );
        // $this->call(RowsSeeder::class);


    }
}
