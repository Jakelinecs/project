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
            $table->bigInteger('priv_idCu')->unsigned();
            $table->bigInteger('priv_idCargo')->unsigned();
            $table->bigInteger('priv_idMetodoCu')->unsigned();
            $table->boolean('cu_status')->default(true);
            $table->primary(['priv_idCu', 'priv_idCargo','priv_idMetodoCu']);
            $table->timestamps();
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
