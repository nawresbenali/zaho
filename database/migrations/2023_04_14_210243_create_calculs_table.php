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
        Schema::create('calculs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('adrdep');
            $table->string('adrarv');
            $table->integer('kil');
            $table->Double('price')->nullable();
            $table->string('nom');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculs');
    }
};
