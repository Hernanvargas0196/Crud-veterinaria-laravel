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
        Schema::create('citas', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->bigInteger('id_mascota');
            $table->date('fecha_cita');
            $table->time('hora_cita');
            $table->timestamps();

            $table->foreign('id_mascota')->references('id')->on('mascotas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
