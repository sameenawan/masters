<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPasswordFieldToUsersTable extends Migration {

	public function up()
	{
		Schema::table('users',function($table) {
       	$table->string('password');
	$table->dropColumn('psw');

});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table) {
    $table->dropColumn('password');
	   $table->string('psw');
});
	}

}
