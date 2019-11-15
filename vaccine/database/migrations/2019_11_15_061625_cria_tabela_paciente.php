<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paciente', function (Blueprint $table) {
            $table->integerIncrements('pacient_id')->unsigned();
            $table->primary('pacient_id');
            $table->foreign('pacient_id')->references('pessoa_id')->on('pessoas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('datanasc');
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
        Schema::dropIfExists('Paciente');
    }
}
