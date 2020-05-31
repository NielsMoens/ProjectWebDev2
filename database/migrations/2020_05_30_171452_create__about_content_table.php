<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_content', function (Blueprint $table) {
            $table->id();
            $table->text('title_nl');
            $table->text('title_en');
            $table->text('abouttitle_nl');
            $table->text('abouttitle_en');
            $table->text('aboutcontent_nl');
            $table->text('aboutcontent_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_content');
    }
}
