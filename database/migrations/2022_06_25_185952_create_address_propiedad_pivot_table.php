<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressPropiedadPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_propiedad', function (Blueprint $table) {
            $table->foreignId('address_id')->references('id')->on('address')->cascadeOnDelete();
            $table->foreignId('propiedad_id')->references('id')->on('propiedades')->cascadeOnDelete();
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
        Schema::dropIfExists('address_propiedad_pivot');
    }
}
