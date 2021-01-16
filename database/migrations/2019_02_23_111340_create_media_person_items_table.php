<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaPersonItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_person_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('media_person_id')->unsigned(); //also user id
            $table->integer('user_id')->unsigned(); //item id
             $table->integer('addedby_id')
                  ->unsigned();
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
        Schema::dropIfExists('media_person_items');
    }
}
