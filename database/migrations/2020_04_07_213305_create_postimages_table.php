<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postimages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('post_id',false,true)->nullable();
             $table->unsignedBigInteger('user_id',false,true)->nullable();
            $table->string('image')->nullable();
            $table->text('image_url')->nullable();
            $table->string('image_ext')->nullable();
            $table->string('image_size')->nullable();
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
        Schema::dropIfExists('postimages');
    }
}
