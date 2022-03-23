<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_recetas', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad_prod');
            $table->timestamps();

            $table->bigInteger('receta_id')->unsigned()->change()->default(2);
            $table->foreign('receta_id')->references('id')->on('recetas');

            $table->bigInteger('producto_id')->unsigned()->change()->default(2);
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_recetas');
    }
};
