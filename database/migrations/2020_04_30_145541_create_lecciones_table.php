<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leccions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maestro_id')->unsigned();
            $table->string('nombre_clase');
            $table->string('horario');
            $table->string('bandera')->default('default.jpg');
            $table->softDeletes('deleted_at');
            $table->timestamps();

           // $table->foreign('maestro_id')->references('id')->on('maestros');
        });
      Schema::table('leccions', function ($table) {
            $table->foreign('maestro_id')->references('id')->on('maestros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leccions');
    }

}
