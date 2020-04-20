<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('albumcat_id',false,true)->nullable();
            $table->unsignedBigInteger('music_id',false,true)->nullable();
            $table->string('name')->nullable();
            $table->string('about')->nullable();
            $table->string('link')->nullable();
            $table->string('access')->nullable();
            $table->string('price')->nullable();
            $table->string('albumcover')->nullable();
            $table->timestamp('release_date')->nullable();
            $table->text('albumcover_url')->nullable();
            $table->string('albumcover_ext')->nullable();
            $table->string('albumcover_size')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('albums');
    }
}
