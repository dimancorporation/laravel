<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedInteger('id_b24')->nullable();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('phone_number', 255)->nullable();
            $table->string('email', 255)->unique()->nullable();
            $table->string('username', 255)->unique()->nullable();
            $table->string('password', 255);
            $table->enum('access', ['read', 'write'])->default('read');
            $table->string('seal', 10);
            $table->string('token', 64);
            $table->string('seal_token', 10);
            $table->enum('role', ['admin', 'user', 'blocked'])->default('user');

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
