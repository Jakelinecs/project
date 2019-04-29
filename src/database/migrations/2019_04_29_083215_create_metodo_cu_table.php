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
            $table->integer('met_cu_idCu');
            $table->string('met_cu_detalleM',30);
            $table->timestamps();
        });

        Schema::table('metodo_cu', function (Blueprint $table) {
            $table->unsignedBigInteger('met_cu_idCu');

            $table->foreign('met_cu_idCu')->references('met_cu_id')->on('cu');
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
