<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')
                  ->index()
                  ->nullable();
            $table->string('description')->nullable();
            $table->string('video_url')->nullable(); //youtube video 
            $table->date('date')->nullable();
            $table->string('publish_status')->default('temp'); //temp, draft, published
            $table->integer('addedby_id')
                  ->unsigned()
                  ->nullable();
            $table->integer('editedby_id')
                  ->unsigned()
                  ->nullable();
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
        Schema::dropIfExists('video_galleries');
    }
}
