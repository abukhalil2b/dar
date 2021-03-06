<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentSundayheroProgram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_sundayhero_program', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->string('month');
            $table->string('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_sundayhero_program');
    }
}
