<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodoCuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_cu', function (Blueprint $table) {
            $table->bigIncrements('met_cu_id');
            $table->bigInteger('met_cu_idCu')->unsigned();
            $table->string('met_cu_detalleM',30);
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
        Schema::dropIfExists('metodo_cu');
    }
}
