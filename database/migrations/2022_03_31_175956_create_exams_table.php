<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_key');
            $table->string('name');
            $table->time('duration');
            $table->integer('creator_id')->unsigned();   
           $table->integer('subject_id')->unsigned();
           $table->integer('depart_id')->unsigned();
           $table->integer('level_id')->unsigned();
           $table->integer('num_question');
           $table->timestamps();

// relations
           //$table->foreign('creator_id')->references('id')->on('proffesors');
          // $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
          // $table->foreign('depart_id')->references('id')->on('departments')->onDelete('cascade');
          // $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
