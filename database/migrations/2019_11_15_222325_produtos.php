<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('produto',45)->nullable();
            $table->date('data');
            $table->String('marca',2)->nullable();
            $table->String('quantidade',45)->nullable();
            $table->String('valor',45)->nullable();
            $table->timestamp('datatempo');
            $table->String('peso',45)->nullable();
            $table->String('codigo');
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
