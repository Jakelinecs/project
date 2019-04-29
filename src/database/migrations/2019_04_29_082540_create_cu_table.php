<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cu', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('cu_idModulo');
            $table->string('cu_carpeta',200);
            $table->string('cu_nombre')->unique();
            $table->boolean('cu_status')->default(true);
            $table->timestamps();
        });

        Schema::table('cu', function (Blueprint $table) {
            $table->unsignedBigInteger('cu_idModulo');

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
        Schema::dropIfExists('cu');
    }
}
