<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('branch_id')->default(0); //0 for all branch
            $table->integer('commission')->default(0); //earned in percent per user
            $table->decimal('balance', 10,2)->default(0);
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
        Schema::dropIfExists('media_people');
    }
}
