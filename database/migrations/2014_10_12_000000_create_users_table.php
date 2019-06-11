<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('third_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('village')->nullable();
            $table->char('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('mobile')->nullable();
            $table->string('note')->nullable();
            $table->string('nationality_id')->nullable();
            $table->string('passport_id')->nullable();

            $table->string('user_type')->default('teacher');            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('plain_password');

            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('level_id')->unsigned()->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
