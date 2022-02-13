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
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('gender_id');


            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('gender_id')->references('id')->on('genders');

            $table->string('first_name', 25)->nullable(false);
            $table->string('middle_name', 25)->nullable();
            $table->string('last_name', 25)->nullable(false);
            $table->string('email', 50)->unique()->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->string('display_picture_link', 255)->nullable();
            $table->integer('delete_flag')->nullable();
            $table->date('modified_at')->nullable();
            $table->string('modified_by', 255)->nullable();

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
