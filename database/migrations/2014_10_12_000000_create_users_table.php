<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('password_temp')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('profile')->nullable()->default(0);
            $table->char('gender', 10)->nullable(); //male female other

            $table->string('country')->nullable();
            $table->string('country_other')->nullable();

            $table->string('location')->nullable(); //google location
            
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();

            $table->string('profile_created_by')->nullable();
            $table->string('religion')->nullable(); //community
            $table->string('social_order')->nullable(); //caste

            $table->string('skin_color')->nullable();
            $table->string('education_level')->nullable();
            $table->string('education_level_other')->nullable();
            $table->string('profession')->nullable();
            $table->string('profession_other')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('looking_for')->nullable(); //girl boy other
            $table->string('img_name')->nullable(); //feature image name

            $table->string('file_name')->nullable();//cv
            $table->string('file_ext')->nullable(); //cv
 
            
            $table->string('user_type')->default('online');
            
            $table->date('dob')->nullable(); //date of birth

            $table->integer('check_count')->default(0); //check by admin
            $table->integer('edit_count')->default(0); //edit by user


            $table->timestamp('mobile_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->integer('addedby_id')->unsigned()->default(1);
            $table->integer('editedby_id')->unsigned()->nullable();
            $table->integer('package')->default(0); //package 1, 2, 3, 4
            $table->integer('proposal_send_daily_limit')->unsigned()->nullable();
            $table->integer('proposal_send_total_limit')->unsigned()->nullable();
            $table->integer('contact_view_limit')->unsigned()->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamp('loggedin_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
