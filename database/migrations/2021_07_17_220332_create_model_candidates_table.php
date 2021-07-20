<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCandidatesTable extends Migration
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
            $table->string('nome');
            $table->char('cep',8);
            $table->string('rua')-> nullable();
            $table->string('bairro')-> nullable();
            $table->string('telefone')-> nullable();
            $table->string('email')-> nullable();
            $table->string('celular')-> nullable();
            $table->string('numero');
            $table->string('cidade');
            $table->char('uf',2);
            $table->string('complemento')-> nullable();
            $table->string('logradouro')-> nullable();
            $table->longText('resumo');
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