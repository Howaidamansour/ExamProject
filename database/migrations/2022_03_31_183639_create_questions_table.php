<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('difficulty');
            $table->string('title');
            $table->integer('chapter_number');
            $table->integer('subject_id')->unsigned();
            $table->integer('depart_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->string('option_one');
            $table->string('option_two');
            $table->string('option_three');
            $table->string('option_four');
            $table->string('answer');
            $table->double('mark');
            $table->timestamps();

            // relations
          // $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
           //$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
          // $table->foreign('depart_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
