<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdColom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cdcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->date('datenais');
            $table->string('profession', 100);
            $table->date('datedebudirection');
            $table->string('contact1')->unique();
            $table->string('contact2');
            $table->string('localisation', 100);
            $table->string('nationalite', 100);
            $table->string('email', 50)->unique();
            $table->string('statut');
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
        //
    }
}
