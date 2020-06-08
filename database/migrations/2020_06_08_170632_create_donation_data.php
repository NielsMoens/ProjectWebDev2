<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_info', function (Blueprint $table) {
            $table->id();
            $table->text('donatorname')->nullable();
            $table->text('donatoremail')->nullable();
            $table->text('donatoramount')->nullable();
            $table->text('donatormessage')->nullable();
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
        Schema::dropIfExists('$table');
    }
}
