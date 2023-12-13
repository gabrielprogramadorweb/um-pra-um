<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Criação da tabela 'produtos' no banco de dados
        Schema::create('produtos', function (Blueprint $table) {
            // Coluna 'id' como chave primária e autoincremento
            $table->increments('id');

            // Coluna 'nome' para armazenar o nome do produto
            $table->string('nome');

            // Coluna 'estoque' para armazenar a quantidade em estoque do produto
            $table->integer('estoque');

            // Coluna 'preco' para armazenar o preço do produto (float)
            $table->float('preco');

            // Coluna 'categoria_id' para estabelecer a relação com a tabela 'categorias'
            $table->integer('categoria_id')->unsigned();

            // Chave estrangeira referenciando a coluna 'id' na tabela 'categorias'
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->unsignedBigInteger('categoria_id'); // Certifique-se de usar o mesmo tipo que sua chave primária em 'categorias'
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

            // Colunas 'created_at' e 'updated_at' para controle de timestamps
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
        // Remoção da tabela 'produtos' no banco de dados caso seja necessário reverter a migração
        Schema::dropIfExists('produtos');
    }
}
