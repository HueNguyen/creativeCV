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
            $table->string('name',100)->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email',50)->nullable();
            $table->string('skype',50)->nullable();
            $table->string('facebook',250)->nullable();
            $table->string('address',250)->nullable();
            $table->text('precept-1')->nullable();
            $table->text('precept-2')->nullable();
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
