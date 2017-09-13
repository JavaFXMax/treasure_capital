<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatabaseModificationsAgapeSacco extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loanrepayments',function($table){
			$table->float('insurance_paid',12,2)->nullable();
            $table->integer('transaction_id')->unsigned();
		});		
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loanrepayments',function($table){
			$table->dropColumn('insurance_paid');
            $table->dropColumn('transaction_id');
		});		
	}

}
