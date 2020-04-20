<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id',false,true)->nullable();
            $table->unsignedBigInteger('music_id',false,true)->nullable();
            $table->unsignedBigInteger('group_id',false,true)->nullable();
            $table->unsignedBigInteger('church_id',false,true)->nullable();
            $table->unsignedBigInteger('advert_id',false,true)->nullable();
            $table->string('visible_to')->default('public');
            $table->longtext('body')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
