<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typstatus', function (Blueprint $table) {
            $table->id('TypStatusID');
            $table->string('NazwaTypu');
        });
        DB::table('typstatus')->insert(
            array(
                ['TypStatusID' => '0',
                'NazwaTypu' => 'Dodane'],
                ['TypStatusID' => '2',
                'NazwaTypu' => 'Rozwiązane']
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
        Schema::dropIfExists('typstatus');
    }
}
