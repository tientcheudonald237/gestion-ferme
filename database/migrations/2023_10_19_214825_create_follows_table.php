<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->integer('weight');
            $table->enum('sex', ['male','female']);
            $table->enum('is_to_buy', [0,1]);
            $table->string('buying price');
            $table->unsignedBigInteger('id_lodge');
            $table->timestamps();
        
            $table->foreign('id_lodge')->references('id')->on('lodges')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
