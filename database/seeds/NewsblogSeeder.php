<?php

use App\Newsblog_content;
use Illuminate\Database\Seeder;

class NewsblogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Newsblog = new Newsblog_content();
        $faker = Faker\Factory::create();

        $Newsblog->posttitle_nl = $faker->text(10);
        $Newsblog->posttitle_en = $faker->text(10);
        $Newsblog->postcontent_nl= $faker->text(30);
        $Newsblog->postcontent_en= $faker->text(30);
        $Newsblog->postdate= $faker->date;

        $Newsblog->save();
    }
}
