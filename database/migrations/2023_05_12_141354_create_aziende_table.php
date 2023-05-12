<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAziendeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aziende', function (Blueprint $table) {
            $table->string('codiceA', 20)->primary();
            $table->string('nome', 30);
            $table->string('localizzazione', 40);
            $table->string('ragSoc', 10);
            $table->text('image');
            $table->integer('tipologia');
            $table->string('descAzienda', 255);
            $table->string('utente');
            $table->foreign('utente')->references('username')->on('utenti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aziende');
    }
};