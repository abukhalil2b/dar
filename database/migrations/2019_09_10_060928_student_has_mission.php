<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentHasMission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_has_mission', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('student_id');
            $table->smallInteger('mission_id');
            $table->boolean('done')->default(0);
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_has_mission');
    }
}
