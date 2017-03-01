<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ADDTABLERE extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dividends',function($table){
			$table->increments('id');			
			$table->decimal('special',15,2);
			$table->decimal('total',15,2);	
			$table->decimal('outstanding',15,2);			
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
		Schema::drop('dividends');
	}

}