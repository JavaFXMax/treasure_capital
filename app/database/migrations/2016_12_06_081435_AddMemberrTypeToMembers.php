<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMemberrTypeToMembers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('members',function($table){
			$table->enum('member_type',array('chairman','secretary','member'))
			->default('member');						
		});		
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('members',function($table){
			$table->dropColumn('member_type');			
		});		
	}

}
