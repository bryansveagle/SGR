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
        Schema::create('requisiciones', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->foreign('partidas_id')->references('id')->on('partidas')->onDelete("cascade");
            $table->foreign('users_id')->references('id')->on('users')->onDelete("cascade");
            $table->bigInteger('partidas_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->string('concepto')->nullable();
            $table->string('urgencia')->nullable();
            $table->string('fechaCreacion')->nullable();
            $table->string('fechaRechazo')->nullable();
            $table->string('motivoRechazo')->nullable();
            $table->string('firmaSolicitante')->nullable();
            $table->string('firmaCotizador')->nullable();
            $table->string('firmaAprobador1')->nullable();
            $table->string('firmaAprobador2')->nullable();

            $table->string('status')->nullable();
            $table->string('aprobado1')->nullable();
            $table->string('aprobado2')->nullable();

            $table->string('comentarios')->nullable();
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
        //
    }
};
