<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZgloszeniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zgloszenia', function (Blueprint $table) {
            $table->id('ZgloszeniaID');
            $table->unsignedBigInteger('Konsultant');
            $table->unsignedBigInteger('Uzytkownik');
            $table->text('Opis');
            $table->unsignedBigInteger('Status');
            $table->foreign('Konsultant')->references('KonsultantID')->on('konsultant');
            $table->foreign('Status')->references('TypStatusID')->on('typstatus');
            $table->foreign('Uzytkownik')->references('UzytkownikID')->on('uzytkownik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zgloszenia');
    }
}
