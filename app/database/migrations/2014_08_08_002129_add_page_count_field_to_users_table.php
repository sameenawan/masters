<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class addPageCountFieldToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users',function($table) {
        $table->boolean('remember_token');
	$table->dropColumn('fname');
	$table->dropColumn('lname');
	$table->dropColumn('userid');
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
    $table->dropColumn('remember_token');
	   $table->string('fname');
        $table->string('lname');
        $table->string('userid');

});
	}

}
