<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churchprofiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('church_id',false,true)->nullable();
            $table->string('propic')->nullable();
            $table->text('propic_url')->nullable();
            $table->string('propic_ext')->nullable();
            $table->string('propic_size')->nullable();
            $table->string('banner')->nullable();
            $table->string('banner_url')->nullable();
            $table->text('about')->nullable();
            $table->string('banner_ext')->nullable();
            $table->string('banner_size')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
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
        Schema::dropIfExists('churchprofiles');
    }
}
