<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_cargo', function (Blueprint $table) {
            $table->bigInteger('ges_car_iduser')->unsigned();
            $table->bigInteger('ges_car_idcargo')->unsigned();
            $table->boolean('ges_car_status')->default(true);
            $table->timestamps();
            $table->timestampTz('time_end')->nullable();
        });

        Schema::table('gestion_cargo',function (Blueprint $table){
            $table->foreign('ges_car_iduser')->references('id')->on('users');
            $table->foreign('ges_car_idcargo')->references('car_id')->on('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestion_cargo');
    }
}
