<?php

use App\About_content;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About_content();

        $faker = Faker\Factory::create();
        $about->title_nl = $faker->text(20);
        $about->title_en = $faker->text(20);
        $about->abouttitle_nl = $faker->text(20);
        $about->abouttitle_en = $faker->text(20);
        $about->aboutcontent_nl = $faker->text(500);
        $about->aboutcontent_en = $faker->text(500);

        $about->save();
    }
}
