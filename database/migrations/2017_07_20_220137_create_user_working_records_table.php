<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWorkingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_working_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')
                  ->unsigned();
            $table->string('company_name')
                  ->nullable();
            $table->string('company_address')
                  ->nullable();
            $table->string('working_role')
                  ->nullable();
            $table->date('joining_date')
                  ->nullable();
            $table->date('leave_date')
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
        Schema::dropIfExists('user_working_records');
    }
}
