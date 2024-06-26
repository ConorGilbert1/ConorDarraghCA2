<?php

namespace Database\Seeders;

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
        // Seed movies
        $this->call(UserSeeder::class);
        $this->call(MoviesSeeder::class);

        // Seed movie reviews
        $this->call(MovieReviewsSeeder::class);
        $this->call(ActorSeeder::class);
    }
}
