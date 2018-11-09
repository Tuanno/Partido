<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomecompleto');
            $table->string('nomeexibicao');
            $table->string('foto');
            $table->unsignedInteger('partido_id');
            $table->foreign('partido_id')->references('id')->on('brokens');
            $table->integer('numero');
            $table->string('endereco');
            $table->integer('voto')->default('0');

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
        Schema::dropIfExists('candidates');
    }
}
