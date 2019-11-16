<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ortu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ortu', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('nama');
            $table->string('email')->unique();;
            $table->string('password');
            $table->string('status');
            $table->string('location');

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
        Schema::dropIfExists('ortu');
    }
}
