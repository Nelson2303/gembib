<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // Campos da fase de sugestão
            $table->text('titulo');
            $table->unsignedBigInteger('sugerido_por_id');
            $table->foreign('sugerido_por_id')->references('id')->on('users');
			$table->text('autor')->nullable();
            $table->text('editora')->nullable();
            $table->text('ano')->nullable();
            $table->text('informacoes')->nullable();
			/* quando uma sugestão for negada, colocamos o motivo*/
			$table->text('motivo')->nullable();
            $table->string('status');
            // Campos da tela de aquisição
            $table->text('tombo')->nullable();
            $table->text('tombo_antigo')->nullable();
            $table->text('cod_impressao')->nullable();
            $table->text('ordem_relatorio')->nullable();
            $table->text('tipo_tombamento')->nullable();
            $table->text('tipo_material')->nullable();
            $table->text('subcategoria')->nullable();
            $table->text('capes')->nullable();
            $table->text('UsuarioS')->nullable();
            $table->text('UsuarioA')->nullable();
            $table->text('link')->nullable();
            $table->text('edicao')->nullable();
            $table->text('volume')->nullable();
            $table->text('parte')->nullable();
            $table->text('fasciculo')->nullable();
            $table->text('local')->nullable();
            $table->text('colecao')->nullable();
            $table->text('isbn')->nullable();
            $table->text('dpto')->nullable();
            $table->text('pedido_por')->nullable();
            $table->text('finalidade')->nullable();
            $table->date('data_sugestao')->nullable();
            $table->text('prioridade')->nullable();
            $table->text('moeda')->nullable();
            $table->float('preco')->nullable();
            $table->text('procedencia')->nullable();
            $table->text('observacao')->nullable();
            $table->text('verba')->nullable();
            $table->text('processo')->nullable();
            $table->text('fornecedor')->nullable();
            $table->text('nota_fiscal')->nullable();
            $table->date('data_tombamento')->nullable();
            $table->text('escala')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens');
    }
}
