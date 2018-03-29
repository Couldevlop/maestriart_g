<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChroralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chorales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',50);
            $table->string('paroisse',50);
            $table->string('localisation',100);
            $table->integer('effectif');
            $table->string('nature');
            $table->integer('age');
            $table->string('type', 100);
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
        Schema::dropIfExists('chrorales');
    }
}
