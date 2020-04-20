<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id',false,true)->nullable();
            $table->unsignedBigInteger('church_id',false,true)->nullable();
            $table->unsignedBigInteger('group_id',false,true)->nullable();
            $table->unsignedBigInteger('music_id',false,true)->nullable();
            $table->string('cat')->nullable();
            $table->text('body')->nullable();
            $table->string('tag')->nullable();
            $table->string('bckimage')->nullable();
            $table->string('colored')->nullable();
            $table->string('status')->default('visible');
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
        Schema::dropIfExists('cards');
    }
}
