<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmFinanceiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_financeiro', function (Blueprint $table) {
            $table->id('id_financeiro');
            $table->string('titulo', 50);
            $table->double('valor');
            $table->integer('categoria_id')->nullable();
            $table->text('descricao', 50);
            $table->timestamps();

            //$table->foreign('categoria_id')->references('id_categoria')->on('tipo_categoria');
        });

        Schema::table('adm_financeiro', function (Blueprint $table) {
            $table->foreign('categoria_id')->references('id_categoria')->on('tipo_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_financeiro');
    }
}
