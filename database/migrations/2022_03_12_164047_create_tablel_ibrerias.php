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
        Schema::create('tablel_ibrerias', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Direccion');
            $table->string('Horario');
            $table->string('Amenidades');

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
        Schema::dropIfExists('tablel_ibrerias');
    }
};
