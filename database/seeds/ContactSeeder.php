<?php

use App\Contact_content;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact_content();

        $faker = Faker\Factory::create();
        $contact->title_nl = $faker->text(20);
        $contact->title_en = $faker->text(20);
        $contact->subtitle_nl = $faker->text(20);
        $contact->subtitle_en = $faker->text(20);
        $contact->content_nl = $faker->text(500);
        $contact->content_en = $faker->text(500);

        $contact->save();
    }
}
