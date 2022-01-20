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
            $table->unsignedBigInteger('Konsultant')->nullable();;
            $table->unsignedBigInteger('Uzytkownik');
            $table->text('Opis');
            $table->unsignedBigInteger('Status');
            $table->timestamps();
            $table->foreign('Konsultant')->references('KonsultantID')->on('konsultant');
            $table->foreign('Status')->references('TypStatusID')->on('typstatus');
            $table->foreign('Uzytkownik')->references('id')->on('users');
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
