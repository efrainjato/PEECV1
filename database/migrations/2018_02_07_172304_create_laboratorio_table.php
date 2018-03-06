<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('tipo');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('colonia');
            $table->string('codigo_pos');
            $table->string('municipio');
            $table->string('muni_esta');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->integer('id_responsable')->unsigned();
            $table->foreign('id_responsable')->references('id')->on('responsable');
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
        Schema::dropIfExists('laboratorio');
    }
}
