<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumtracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albumtracks', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('music_id',false,true)->nullable();
            $table->unsignedBigInteger('album_id',false,true)->nullable();
            $table->string('title')->nullable();
            $table->string('about')->nullable();
            $table->string('price')->nullable();
            $table->string('albumtrack')->nullable();
            $table->timestamp('release_date')->nullable();
            $table->text('albumtrack_url')->nullable();
            $table->string('albumtrack_ext')->nullable();
            $table->string('albumtrack_size')->nullable();
             $table->string('trackcover')->nullable();
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
        Schema::dropIfExists('albumtracks');
    }
}
