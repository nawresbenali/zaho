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
        Schema::create('etoiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nombreetoile');
            $table->string('nom');
            $table->string('email');
            $table->string('message');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etoiles');
    }
};