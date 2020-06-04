<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {

            $table->id();
            $table->text('template');
            $table->text('title_nl'); // Doe het zelf met fré
            $table->text('slug_nl'); // doe-het-zelf-met-fré
            $table->text('title_en'); // Doe het zelf met fré
            $table->text('slug_en'); // doe-het-zelf-met-fré
            $table->text('intro_nl');
            $table->text('intro_en');    
            $table->text('content_nl'); 
            $table->text('content_en'); 
            $table->tinyInteger('active')->default(1); 
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
        Schema::dropIfExists('pages');
    }
}
