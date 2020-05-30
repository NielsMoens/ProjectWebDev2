<?php

use App\home_content;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new Home_content();

        $faker = Faker\Factory::create();
        $home->title_nl = $faker->text(80);
        $home->title_en = $faker->text(80);
        $home->maininfo_nl= $faker->text;
        $home->maininfo_en= $faker->text;

        $home->save();
    }
}
