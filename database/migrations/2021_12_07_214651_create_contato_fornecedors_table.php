<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_fornecedors', function (Blueprint $table) {
            $table->id();
            $table->integer('telefone_fornecedor');
            $table->integer('whatsappfornecedor');
            $table->string('email_fornecedor');
            $table->unsignedBigInteger('fornecdor_id');
            $table->foreign('fornecdor_id')->references('id')->on('fornecedors');
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
        Schema::dropIfExists('contato_fornecedors');
    }
}
