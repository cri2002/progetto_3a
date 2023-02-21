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
        Schema::create('ordines', function (Blueprint $table) {
            $table->id();
            $table->string("data_ordine");
            $table->integer("id_utente");
            $table->string("id_pagamento");
            $table->string("risposta_coriere");
            $table->string("id_ordine");
            $table->string("id_coriere");
            $table->string("id_carrello");
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
        Schema::dropIfExists('ordines');
    }
};
