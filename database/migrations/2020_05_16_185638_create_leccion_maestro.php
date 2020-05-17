<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeccionMaestro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leccion_maestro', function (Blueprint $table) {
            $table->id();
            $table->integer('leccion_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->timestamps();

        });
        Schema::table('leccion_maestro', function ($table){
            $table->foreign('leccion_id')->references('id')->on('leccions')->onDelete('cascade');
        });
        Schema::table('leccion_maestro', function ($table){
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leccion_maestro');
    }
}
