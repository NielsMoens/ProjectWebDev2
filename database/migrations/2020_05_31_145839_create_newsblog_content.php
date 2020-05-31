<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsblogContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsblog_content', function (Blueprint $table) {
            $table->id();
            $table->string('posttitle_nl');
            $table->string('posttitle_en');
            $table->text('postcontent_nl');
            $table->text('postcontent_en');
            $table->text('postdate');
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
        Schema::dropIfExists('newsblog_content');
    }
}
