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
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('proveedores_id')->unsigned();
            $table->bigInteger('requisiciones_id')->unsigned();

            $table->string('producto')->nullable();
            $table->string('fechaCreacion')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('cotizacion1')->nullable();
            $table->string('cotizacion2')->nullable();
            $table->string('cotizacion3')->nullable();
            $table->timestamps();
            
            $table->foreign('proveedores_id')->references('id')->on('proveedores')->onDelete("cascade");
            $table->foreign('requisiciones_id')->references('id')->on('requisiciones')->onDelete("cascade");

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
