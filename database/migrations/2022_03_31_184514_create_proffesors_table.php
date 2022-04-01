<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProffesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proffesors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prof_name');
            $table->string('email')->unique();
            $table->integer('depart_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->boolean('hasApprovel');
            $table->timestamps();

            //relations

           // $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            //$table->foreign('depart_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proffesors');
    }
}
