<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rncs', function (Blueprint $table) {
            $table->string('rnc_empresa', 250)->primary();
            $table->string('razon_social', 250)->nullable();
            $table->string('nombre_comercial', 250)->nullable();
            $table->string('actividad_economica', 250)->nullable();
            $table->string('fecha', 250)->nullable();
            $table->string('estado', 250)->nullable();
            $table->string('regimen_de_pagos', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rncs');
    }
}
