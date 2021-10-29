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
            $table->text('Login')->Unique();
            $table->text('Haslo');
            $table->text('Imie');
            $table->text('Nazwisko');
            $table->text('Telefon');
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
