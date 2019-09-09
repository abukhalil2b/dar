<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_program', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('record_id')->unsigned();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->integer('student_id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->string('program_tag');
            $table->integer('user_id')->unsigned()->nullable();
            $table->time('present_time')->nullable();
            $table->boolean('present')->default(0);
            $table->boolean('white_dishdash')->nullable();
            $table->boolean('not_mosbil')->nullable();
            $table->boolean('pen_reader')->nullable();
            $table->boolean('notebook')->nullable();
            $table->boolean('white_mosar')->nullable();
            $table->string('other_note')->nullable();
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
        Schema::dropIfExists('student_program');
    }
}
