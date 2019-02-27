<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->integer('juz_id')->unsigned()->nullable();
            $table->foreign('juz_id')->references('id')->on('juzs');
            $table->integer('sora_id')->unsigned();
            $table->foreign('sora_id')->references('id')->on('soras');
            $table->integer('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('aya_from')->nullable();
            $table->string('aya_to')->nullable();
            $table->string('juz_name')->nullable();
            $table->string('sora_name')->nullable();
            $table->string('program_name')->nullable();
            $table->string('teacher_name')->nullable();
            $table->string('student_name')->nullable();

            $table->string('sora_status')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
