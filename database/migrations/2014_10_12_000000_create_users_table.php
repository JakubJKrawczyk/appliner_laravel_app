<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('UzytkownikID');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('imie');
            $table->string('Nazwisko');
            $table->string('Telefon');
            $table->UnsignedBigInteger('TypKonta');
            $table->string('NIP')->unique()->nullable();
            $table->string('NazwaFirmy')->nullable();
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
        Schema::dropIfExists('users');
    }
}
