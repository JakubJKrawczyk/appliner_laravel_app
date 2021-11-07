<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypkontaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typkonta', function (Blueprint $table) {
            $table->id('TypKontaID');
            $table->string('NazwaTypu')->Unique();
        });
        DB::table('typkonta')->insert(
            array(
                ['TypkontaID' => '1',
                'NazwaTypu' => 'Zwykly'],
                ['TypkontaID' => '2',
                'NazwaTypu' => 'Firma'],
                )   
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typkonta');
    }
}
