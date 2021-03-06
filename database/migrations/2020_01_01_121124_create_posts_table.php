<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')
                  ->index()
                  ->nullable();
            $table->string('title_bn')
                  ->nullable();
            $table->text('description')
                  ->nullable();
            $table->text('description_bn')
                  ->nullable();
            $table->string('excerpt')->nullable();
            $table->string('excerpt_bn')->nullable();
            $table->string('feature_img_name')
                  ->nullable();
            $table->string('feature_img_original_name')
                  ->nullable();
            $table->string('feature_img_mime')
                  ->nullable();
            $table->string('feature_img_ext')
                  ->nullable();
            $table->text('tags')->nullable(); //for search
            $table->string('categories')->nullable(); //for search
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('read')->default(0);
            $table->date('last_read')->nullable();
            $table->date('date')->nullable();
            $table->boolean('headline')->default(0);
            $table->boolean('front_slider')->default(0);
            $table->string('publish_status')->default('temp'); //temp, draft, published
            $table->integer('addedby_id')
                  ->unsigned()
                  ->nullable();
            $table->integer('editedby_id')
                  ->unsigned()
                  ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
