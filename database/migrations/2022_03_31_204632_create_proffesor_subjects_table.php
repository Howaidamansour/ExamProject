<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProffesorSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proffesor_subjects', function (Blueprint $table) {
            $table->id();
            $table->integer('professor_id')->unsigned();
            $table->integer('subject_id');
            $table->timestamps();

            //relation

           // $table->foreign('professor_id')->references('id')->on('proffesors')->onDelete('cascade');
           // $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proffesor_subjects');
    }
}
