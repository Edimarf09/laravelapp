<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('banco_id')->references('id')->on('bancos');
            $table->string('endereco');
            $table->bigInteger('fone1');
            $table->integer('tipo1');
            $table->bigInteger('fone2');
            $table->integer('tipo2');
            $table->string('agencia');
            $table->string('nome_agencia');
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
        Schema::dropIfExists('agencias');
    }
};
