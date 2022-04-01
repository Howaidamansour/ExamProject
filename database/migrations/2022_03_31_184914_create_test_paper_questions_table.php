<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestPaperQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_paper_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('test_paper_id')->unsigned();
            $table->integer('question_id');
            $table->timestamps();

            //relations
          //  $table->foreign('test_paper_id')->references('id')->on('test_paper')->onDelete('cascade');
          //  $table->foreign('question_id')->references('id')->on('Question')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_paper_questions');
    }
}
