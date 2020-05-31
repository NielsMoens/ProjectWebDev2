<?php

use App\Privacy_content;
use Illuminate\Database\Seeder;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privacy = new Privacy_content();

        $faker = Faker\Factory::create();
        $privacy->title_nl = $faker->text(20);
        $privacy->title_en = $faker->text(20);
        $privacy->subtitle_nl = $faker->text(20);
        $privacy->subtitle_en = $faker->text(20);
        $privacy->content_nl = $faker->text(500);
        $privacy->content_en = $faker->text(500);

        $privacy->save();
    }
}
