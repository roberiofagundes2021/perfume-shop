<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',60);
            $table->float('icms');
            $table->float('ipi');
            $table->float('frete');
            $table->float('valornafabrica');
            $table->float('valordecompra');
            $table->float('lucro');
            $table->float('valorvenda');
            $table->float('desconto');
            $table->float('quantidade');
            $table->date('datavencimento');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('prateleira_id');
            $table->foreign('prateleira_id')->references('id')->on('prateleiras');
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
        Schema::dropIfExists('produtos');
    }
}
