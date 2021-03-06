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
        if (!Schema::hasTable('users')) {
            //if table 'users' doesn't exist
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->rememberToken();
                
                //extra user attributes
                $table->string('first_name')->nullable();
                $table->string('middle_ name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('city')->nullable();
                $table->integer('role_id')->unsigned()->default(3);

                $table->timestamps();

            });
        }
        //if table 'users' already exist
        //Schema::table('users',function(Blueprint $table){
            /* Commented for debugging reasons
            
            $table->string('first_name')->nullable();
            $table->string('middle_ name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('city')->nullable();
            $table->integer('role_id')->unsigned()->default(3);
            
            */
        //});
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
