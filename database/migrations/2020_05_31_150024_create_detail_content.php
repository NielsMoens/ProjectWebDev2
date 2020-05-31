<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_content', function (Blueprint $table) {
            $table->id();
            $table->string('detailtitle_nl');
            $table->string('detailtitle_en');
            $table->text('detailcontent_nl');
            $table->text('detailcontent_en');
            $table->date('detaildate');
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
        Schema::dropIfExists('detail_content');
    }
}
