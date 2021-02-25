<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatPublishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_publishes', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('chat_id')
            //       ->unsigned();
            $table->integer('publishable_id')
                  ->unsigned()->nullable();
            $table->string('publishable_type')->nullable();
            $table->integer('chatable_id')
                  ->unsigned()->nullable();
            $table->integer('publishedby_id')
                  ->unsigned()->nullable();
            $table->string('publishedby_type')->nullable();
            // $table->integer('publishedto_id')
            //       ->unsigned();
            // $table->string('publishedto_type');
            $table->boolean('seen')->default(0);
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
        Schema::dropIfExists('chat_publishes');
    }
}
