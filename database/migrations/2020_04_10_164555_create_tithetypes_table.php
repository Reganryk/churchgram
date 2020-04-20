<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTithetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tithetypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('church_id',false,true)->nullable();
            $table->string('title')->nullable();
            $table->string('about')->nullable();
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
        Schema::dropIfExists('tithetypes');
    }
}
