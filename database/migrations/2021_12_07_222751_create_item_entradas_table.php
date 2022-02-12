<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_entradas', function (Blueprint $table) {
            $table->id();
            $table->float('precocompra');
            $table->float('quantidade');
            $table->string('unidade');
            $table->float('ipi');
            $table->float('frete');
            $table->float('icms');
            $table->unsignedBigInteger('entrada_id');
            $table->foreign('entrada_id')->references('id')->on('entradas');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_entradas');
    }
}
