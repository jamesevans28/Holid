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
            $table->string('fullname');
            $table->string('username', 7)->unique();
            $table->string('email')->unique();
            $table->string('empid')->unique();
            $table->string('role_title');
            $table->string('location');
            $table->string('manager', 7);
            $table->string('org');
            $table->string('team');
            $table->string('company');
            $table->string('password', 60);
            $table->dateTime('active_at');
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
