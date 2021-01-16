<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGalleryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_gallery_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_gallery_id')
                  ->unsigned();
            $table->string('title')
                  ->index()
                  ->nullable();
            $table->string('description')->nullable();
            $table->string('photo_credit')->nullable();
            $table->string('img_url')
                  ->nullable();
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
        Schema::dropIfExists('image_gallery_items');
    }
}
