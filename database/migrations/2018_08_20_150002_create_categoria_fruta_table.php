<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaFrutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_fruta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fruta_id');
            $table->unsignedInteger('categorias_id');

            $table->foreign('fruta_id')->references('id')->on('frutas');
            $table->foreign('categorias_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('categoria_fruta');
    }
}
