<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id(); // ID do projeto
            $table->string('nome'); // Nome do projeto
            $table->text('descricao')->nullable(); // Descrição do projeto
            $table->date('data_inicio'); // Data de início
            $table->enum('status', ['Pendente', 'Em Andamento', 'Concluído']); // Status do projeto
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
