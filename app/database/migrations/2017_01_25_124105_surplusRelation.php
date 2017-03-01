<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SurplusRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surplus',function($table){
			$table->increments('id');			
			$table->decimal('rate',2,2);
			$table->string('frequency');
			$table->enum('action',array('disburse','forward'));				
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
		Schema::drop('surplus');
	}

}