<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_family_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('father_name')->nullable();#ok
            $table->string('father_education')->nullable();#ok
            $table->string('father_occupation')->nullable();#ok
            $table->string('mother_name')->nullable();#ok
            $table->string('mother_occupation')->nullable();#ok
            $table->string('family_class')->nullable();#ok
            $table->string('number_of_brother')->nullable();#ok
            $table->string('how_many_brother_married')->nullable();#ok
            $table->string('number_of_sister')->nullable();#ok
            $table->string('how_many_sister_married')->nullable();#ok

            $table->string('alternative_email')->nullable();
            $table->string('alternative_mobile')->nullable();
            $table->string('convenient_time_to_call')->nullable();

            $table->string('contact_person_mobile')->nullable();
            $table->string('name_of_contact_person')->nullable();
            $table->string('relation_with_contact_person')->nullable();

            $table->string('yearly_income')->nullable();

            $table->text('about_yourself')->nullable(); //highlight yourself

            $table->text('extra_queries')->nullable(); //about your partner or other e.g. locality religion, extra info

            $table->boolean('checked')->default(0);
            $table->boolean('can_edit')->default(1);

            $table->integer('addedby_id')->unsigned()->default(1);
            $table->integer('editedby_id')->unsigned()->nullable();
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
        Schema::dropIfExists('user_family_infos');
    }
}
