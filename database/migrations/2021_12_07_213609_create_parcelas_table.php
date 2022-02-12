<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelas', function (Blueprint $table) {
            $table->id();
            $table->integer('numeros_parcelas');
            $table->float('valor_parcelas');
            $table->string('status');
            $table->date('vencimento');
            $table->float('valortotalparcela');
            $table->unsignedBigInteger('pagamento_id');
            $table->foreign('pagamento_id')->references('id')->on('pagamentos');
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
        Schema::dropIfExists('parcelas');
    }
}
