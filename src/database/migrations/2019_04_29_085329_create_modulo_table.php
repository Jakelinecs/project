<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo', function (Blueprint $table) {
            $table->bigIncrements('mod_id');
            $table->string('mod_nombre',50);
            $table->string('mod_icono',50);
            $table->boolean('mod_status')->default(true);
            $table->timestamps();
        });


        Schema::table('metodo_cu', function (Blueprint $table) {
            $table->foreign('met_cu_idCu')->references('cu_id')->on('cu');
        });

        Schema::table('privilegio',function (Blueprint $table){
            $table->foreign('priv_idCu')->references('cu_id')->on('cu');
            $table->foreign('priv_idCargo')->references('car_id')->on('cargo');
            $table->foreign('priv_idMetodoCu')->references('met_cu_id')->on('metodo_cu');

        });


        Schema::table('cu', function (Blueprint $table) {
            $table->foreign('cu_idModulo')->references('mod_id')->on('modulo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo');
    }
}
