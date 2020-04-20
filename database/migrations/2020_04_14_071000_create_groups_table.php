<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id',false,true)->nullable();
            $table->unsignedBigInteger('church_id',false,true)->nullable();
            $table->unsignedBigInteger('music_id',false,true)->nullable();
            $table->unsignedBigInteger('groupcat_id',false,true)->nullable();
            $table->string('uname')->nullable();
            $table->string('propic')->nullable();
            $table->text('about')->nullable();
            $table->text('propic_url')->nullable();
            $table->string('propic_ext')->nullable();
            $table->string('propic_size')->nullable();
            $table->string('banner')->nullable();
            $table->string('banner_url')->nullable();
            $table->string('banner_ext')->nullable();
            $table->string('banner_size')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('groups');
    }
}
