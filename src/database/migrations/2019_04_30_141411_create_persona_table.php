<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('per_id');
            $table->string('per_nombre');
            $table->string('per_apellido');
            $table->date('per_fecha_nacimiento');
            $table->boolean('per_genero')->default(true);
            $table->boolean('per_status')->default(true);
            $table->bigInteger('per_idUser')->unsigned();
            $table->timestamps();
        });

        Schema::table('persona',function (Blueprint $table){
            $table->foreign('per_idUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
