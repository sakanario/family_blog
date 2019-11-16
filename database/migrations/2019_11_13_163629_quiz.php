<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quiz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('quizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->char('category', 20);
            $table->char('type', 20);
            $table->char('difficulty', 20);
            $table->string('question');
            $table->string('correct_answer');
            $table->string('incorrect_answers0');
            $table->string('incorrect_answers1');
            $table->string('incorrect_answers2');

            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('quizs');
    }
}
