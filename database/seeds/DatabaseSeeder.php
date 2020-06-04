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
    for ($i=0; $i < 10; $i++) { 
        $this->call(NewsblogSeeder::class);
    }
    $this->call(DetailSeeder::class);
    $this->call(AboutSeeder::class);
    $this->call(ContactSeeder::class);
    $this->call(DonateSeeder::class);
    $this->call(PrivacySeeder::class);
    $this->call(DetailSeeder::class);
    
    
    }
}
