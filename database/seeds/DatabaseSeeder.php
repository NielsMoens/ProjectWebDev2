<?php

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
        
    $this->call(HomeSeeder::class);
    $this->call(NewsblogSeeder::class);
    $this->call(DetailSeeder::class);
    $this->call(HomeSeeder::class);
    }
}
