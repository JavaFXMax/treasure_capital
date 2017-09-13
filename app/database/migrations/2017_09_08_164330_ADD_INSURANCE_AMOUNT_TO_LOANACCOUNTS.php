<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ADDINSURANCEAMOUNTTOLOANACCOUNTS extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loanaccounts',function($table){
			$table->float('insurance_amount',11,2)->nullable();				
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loanaccounts',function($table){
			$table->dropColumn('insurance_amount');
		});		
	}

}
