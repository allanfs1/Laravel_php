<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SiteT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_t', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nome',45)->nullable();
            $table->date('data');
            $table->String('Sexo',2)->nullable();
            $table->String('nome_mae',45)->nullable();
            $table->String('nome_pai',45)->nullable();
            $table->timestamp('time');
        });//
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
