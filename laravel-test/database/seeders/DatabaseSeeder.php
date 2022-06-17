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
        // $this->call(TeamSeeder::class);
        // $this->call(
        //     PlayerSeeder::class,
        // );
        // $this->call(RowsSeeder::class);

        $this->call([
            CategorySeeder::class,
            PlayerSeeder::class,
            SeasonsSeeder::class,
            TeamSeeder::class,
            UniqueTournamentssSeeder::class,
            SeasonsSeeder::class
        ]);
    }
}
