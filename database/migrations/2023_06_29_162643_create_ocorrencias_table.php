<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->id();
            $table->string('provincia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('bairro')->nullable();
            $table->string('genero')->nullable();
            $table->string('rg')->nullable();
            $table->string('bi')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('telefone')->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('nome');
            $table->string('sobre_nome');
            $table->longText('local_desaparecimento')->nullable();
            $table->date('dt_desaparecimento')->nullable();
            $table->longText('relato_desaparecimento')->nullable();
            $table->boolean('localizado')->nullable();
            
            $table->longText('condicoes_desaparecimento')->nullable();
            $table->text('imagem', 255)->nullable();
            $table->string('longitude')->nullable();
            $table->string('cor_pele')->nullable();
            $table->string('cor_olho')->nullable();

            $table->string('latitude')->nullable();
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
        Schema::dropIfExists('ocorrencias');
    }
};