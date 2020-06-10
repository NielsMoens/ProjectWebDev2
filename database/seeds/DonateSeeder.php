<?php

use App\Donate_content;
use Illuminate\Database\Seeder;

class DonateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donate = new Donate_content();

        $faker = Faker\Factory::create();
        $donate->title_nl = $faker->text(20);
        $donate->title_en = $faker->text(20);
        $donate->subtitle_nl = $faker->text(20);
        $donate->subtitle_en = $faker->text(20);
        $donate->featuredtitle_nl = $faker->text(20);
        $donate->featuredtitle_en = $faker->text(20);

        $donate->save();
    }
}
