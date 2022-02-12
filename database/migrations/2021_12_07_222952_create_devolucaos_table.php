<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevolucaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolucaos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade_devolvida');
            $table->date('datadevolucao');
            $table->string('descricao');
            $table->unsignedBigInteger('item_vendas_id');
            $table->foreign('item_vendas_id')->references('id')->on('item_vendas');
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
        Schema::dropIfExists('devolucaos');
    }
}
