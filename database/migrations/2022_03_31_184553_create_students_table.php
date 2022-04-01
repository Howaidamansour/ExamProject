<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('email')->unique();
            $table->integer('depart_id')->nullable();
            $table->integer('level_id')->nullable();
            $table->timestamps();

            //relations

           // $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
          //  $table->foreign('depart_id')->references('id')->on('departments')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
