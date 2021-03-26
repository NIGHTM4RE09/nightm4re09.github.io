<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChipUserchipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chip_userchip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chip_id')->nullable();
            $table->foreign('chip_id')->references('id')->on('chips')->onDelete('set null');
            $table->unsignedBigInteger('userchip_id')->nullable();
            $table->foreign('userchip_id')->references('id')->on('userchips')->onDelete('set null');
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
        Schema::dropIfExists('chip_userchip');
    }
}
