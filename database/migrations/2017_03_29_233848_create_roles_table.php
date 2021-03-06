<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
		});

        Schema::create('role_user', function (Blueprint $table) {  //用户关联表
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->foreign('user_id')    //外键
            ->references('id')
                ->on('users')
                ->onDelete('cascade') ;
            $table->foreign('role_id')    //外键
            ->references('id')
                ->on('roles')
                ->onDelete('cascade') ;
            $table->timestamps();
            $table->primary(['user_id','role_id']) ;
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_user');
		Schema::drop('roles');
	}

}
