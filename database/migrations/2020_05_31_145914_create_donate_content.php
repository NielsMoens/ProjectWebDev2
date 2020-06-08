<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonateContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate_content', function (Blueprint $table) {
            $table->id();
            $table->text('title_nl');
            $table->text('title_en');
            $table->text('subtitle_nl');
            $table->text('subtitle_en');
            $table->text('featuredtitle_nl');
            $table->text('featuredtitle_en');
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
        Schema::dropIfExists('donate_content');
    }
}
