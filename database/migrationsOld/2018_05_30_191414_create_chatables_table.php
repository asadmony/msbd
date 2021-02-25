<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chatto_id')
                  ->unsigned()->nullable();
            $table->string('chatto_type')->nullable(); 
            $table->integer('chatby_id')
                  ->unsigned()->nullable();
            $table->string('chatby_type')->nullable();
            //user cart shop product
            $table->integer('chat_id')
                  ->unsigned()->nullable();
            $table->boolean('autoload')->default(0);
            $table->boolean('box')->default(0);
            $table->boolean('leaved')->default(0);
            $table->string('status')
                  ->default('regular');
            $table->integer('addedby_id')
                  ->unsigned()
                  ->nullable();
            //regular archive unknown
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
        Schema::dropIfExists('chatables');
    }
}
