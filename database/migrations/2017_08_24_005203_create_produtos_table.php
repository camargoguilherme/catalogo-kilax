<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {

            $table->string('id');
            $table->string('descricao');
            $table->string('material')->default('')->nullable;
            $table->string('medidas');
            $table->string('origem');
            $table->string('peso');
            $table->string('precaucao')->nullable;
            $table->decimal('valor', 5,2)->default(0.00);
            $table->enum('publicado',['sim', 'nao'])->default('nao');
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
        Schema::dropIfExists('cursos');
    }
}
