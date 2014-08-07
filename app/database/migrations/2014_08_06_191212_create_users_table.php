<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

public function up() {

    Schema::create('users', function($table) {

        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        $table->timestamps();

        # The rest of the fields...

        $table->string('fname');
        $table->string('lname');
        $table->string('userid');
        $table->string('psw');
        $table->string('email');

    });
}







	public function down()
	{
		Schema::drop('users');
	}

}
