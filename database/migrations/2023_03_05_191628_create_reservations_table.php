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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->string('email');
            $table->string('départ');
            $table->string('arivée');
            $table->date('date');
            $table->integer('tel');
            $table->integer('nombredeplace');
            $table->string('position');
            $table->string('nomdechauufeur');
            $table->string('accepter')->nullable();
            $table->string('payer')->nullable();








        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
