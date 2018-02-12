<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InformationForUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('telefono')->unique()->nullable();
            $table->string('celular')->unique()->nullable();
            $table->string('sexo');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('avatar')->nullable();
            $table->char('estado_civil',1)->nullable();
            $table->timestamp('fecha_nacimiento')->nullable();
            $table->timestamp('fecha_contratacion')->nullable();
            $table->string('curp');
            $table->string('rfc');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info');
    }
}
