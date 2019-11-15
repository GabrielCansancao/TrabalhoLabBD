<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaPessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pessoa', function (Blueprint $table) {
            $table->integerIncrements('pessoa_id');
            $table->primary('pessoa_id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cpf');
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
        Schema::dropIfExists('Pessoa');
    }
}
