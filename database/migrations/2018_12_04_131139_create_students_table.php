<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('third_name')->nullable();
            $table->string('last_name')->nullable();
            $table->char('gender')->nullable();
            $table->string('parent_follow_up')->nullable();
            $table->string('mobile')->nullable();
            $table->string('national_id')->nullable();
            $table->string('age')->nullable();
            $table->string('started_at_grade')->nullable();
            $table->string('grade')->nullable();

            $table->integer('level_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();

            $table->string('note')->nullable();
            $table->string('avatar')->nullable();

            $table->integer('semester_id')->nullable();
            
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
        Schema::dropIfExists('students');
    }
}
