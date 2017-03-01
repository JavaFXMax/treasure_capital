<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApprovalStagestoLoanAccounts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loanaccounts',function($table){
			$table->boolean('chairman_approved')->default(0);	
			$table->boolean('secretary_approved')->default(0);								
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
			$table->dropColumn('chairman_approved');	
			$table->dropColumn('secretary_approved');		
		});		
	}

}