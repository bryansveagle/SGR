<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('partidas_id')->unsigned();
            $table->bigInteger('proveedores_id')->unsigned();
            $table->bigInteger('requisiciones_id')->unsigned();
            $table->bigInteger('cotizaciones_id')->unsigned();



            $table->timestamps();

            $table->foreign('partidas_id')->references('id')->on('partidas')->onDelete("cascade");
            $table->foreign('proveedores_id')->references('id')->on('proveedores')->onDelete("cascade");
            $table->foreign('requisiciones_id')->references('id')->on('requisiciones')->onDelete("cascade");
            $table->foreign('cotizaciones_id')->references('id')->on('cotizaciones')->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
