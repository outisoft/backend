<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadTipoPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedad_tipo', function (Blueprint $table) {
            $table->foreignId('propiedad_id')->references('id')->on('propiedades')->cascadeOnDelete();
            $table->foreignId('tipo_id')->references('id')->on('tipos')->cascadeOnDelete();
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
        Schema::dropIfExists('propiedad_tipo_pivot');
    }
}
