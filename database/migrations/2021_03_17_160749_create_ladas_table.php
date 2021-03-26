<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ladas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            //$table->unsignedBigInteger('chip_id')->nullable();
            //$table->foreign('chip_id')->references('id')->on('chips')->onDelete('set null');
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
        Schema::dropIfExists('ladas');
    }
}
