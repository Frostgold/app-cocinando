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

            $table->foreignId('receta_id')->constrained();

            $table->foreignId('producto_id')->constrained();
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
