<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUzytkownikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzytkownik', function (Blueprint $table) {
            $table->id('UzytkownikID');
            $table->Text('Haslo');
            $table->Text('Login')->Unique();
            $table->Text('Imie');
            $table->Text('Nazwisko');
            $table->unsignedBigInteger('Miasto');
            $table->Text('Telefon');
            $table->unsignedBigInteger('TypKonta');
            $table->Text('NIP')->Unique()->nullable();
            $table->Text('NazwaFirmy')->nullable();
            
            $table->foreign('Miasto')->references('MiastoID')->on('miasto');
            $table->foreign('TypKonta')->references('TypKontaID')->on('typkonta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uzytkownik');
    }
}
