<?php

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
          $table->string('firstname');
          $table->string('lastname');
          $table->string('username')->unique();
          $table->string('email')->unique();
          $table->string('password');
          $table->text('about')->nullable();
          $table->string('avatar_path')->nullable();
          $table->boolean('gender')->nullable();
          $table->string('city')->nullable();
          $table->date('birthday');
          $table->string('school')->nullable();
          $table->string('job')->nullable();
          $table->boolean('admin');
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
        Schema::drop('users');
    }
}
