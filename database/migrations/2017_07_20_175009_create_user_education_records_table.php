<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEducationRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_education_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')
                  ->unsigned();
            $table->string('passed_degree')
                  ->nullable()
                  ->index();
            $table->string('passed_grade')
                  ->nullable()
                  ->index();
            $table->string('passed_department')
                  ->nullable();//subject
            $table->string('organization_name')
                  ->nullable()
                  ->index();
            $table->string('organization_address')
                  ->nullable();
            $table->string('organization_type')
                  ->nullable(); //school college madrasha university
            $table->date('year_from')
                  ->nullable();
            $table->date('year_to')
                  ->nullable();
            $table->date('passed_year')->nullable();
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
        Schema::dropIfExists('user_education_records');
    }
}
