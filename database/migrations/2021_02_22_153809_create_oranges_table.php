<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oranges', function (Blueprint $table) {
            $table->id();
            $table->string('nom_company', 50);
            $table->string('rue', 250);
            $table->integer('numero_commune');
            $table->integer('numero_porte');
            $table->string('nom_contact',50);
            $table->string('prenom_contact',50);
            $table->string('phone', 20);
            $table->string('email', 50);
            $table->string('photo', 150);
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
        Schema::dropIfExists('oranges');
    }
}
