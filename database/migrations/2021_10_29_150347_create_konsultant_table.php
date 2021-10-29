<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultant', function (Blueprint $table) {
            $table->id('KonsultantID');
            $table->string('Login')->Unique();
            $table->string('Haslo');
            $table->string('Imie');
            $table->string('email');
            $table->string('Nazwisko');
            $table->string('Telefon');
            $table->unsignedBigInteger('Status');
            $table->foreign('Status')->references('StatusKonsultantID')->on('statuskonsultant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsultant');
    }
}
