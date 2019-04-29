<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegio', function (Blueprint $table) {
            $table->integer('priv_idCu');
            $table->integer('priv_idCargo');
            $table->integer('priv_idMetodoCu');
            $table->boolean('cu_status')->default(true);
        });


        Schema::table('privilegio',function (Blueprint $table){
            $table->primary(['priv_idCu', 'priv_idCargo','priv_idMetodoCu']);

            $table->foreign('priv_idCu')->references('cu_id')->on('cu');
            $table->foreign('priv_idCargo')->references('car_id')->on('cargo');
            $table->foreign('priv_idMetodoCu')->references('met_cu_id')->on('metodo_cu');

        });

        Schema::table('users', function (Blueprint $table) {
            $table->boolean('status')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilegio');
    }
}
