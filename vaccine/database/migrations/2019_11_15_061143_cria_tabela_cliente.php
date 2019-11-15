<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
            $table->integerIncrements('cliente_id')->unsigned();
            $table->primary('cliente_id');
            $table->foreign('cliente_id')->references('pessoa_id')->on('pessoas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('email');
            $table->string('telefone');      
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
        Schema::dropIfExists('Cliente');
    }
}
