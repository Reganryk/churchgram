<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churchregs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id',false,true)->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('uname')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('headpastor')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->default('new');
            $table->string('password');
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
        Schema::dropIfExists('churchregs');
    }
}
