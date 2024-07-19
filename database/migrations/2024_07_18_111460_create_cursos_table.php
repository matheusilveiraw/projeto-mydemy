<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_curso');
            $table->text('descricao_curso');
            $table->string('img_curso');
            $table->double('preco', 10, 2);

            $table->unsignedBigInteger('id_categoria'); //chave estrangeira para o categorias
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
    
            $table->unsignedBigInteger('id_professor'); //chave estrangeira para professores
            $table->foreign('id_professor')->references('id')->on('professores')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};