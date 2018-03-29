<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerers', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_ch')->unsigned();
            $table->integer('id_cdc')->unsigned();
             $table->foreign('id_ch')->references('id')->on('chorales');
             $table->foreign('id_cdc')->references('id')->on('cdcs');
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
        Schema::dropIfExists('gerers');
    }
}
