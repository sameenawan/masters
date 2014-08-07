<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetablesTable extends Migration {

public function up() {

    Schema::create('timetables', function($table) {

        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        $table->timestamps();

        # The rest of the fields...

        $table->string('fname');
        $table->string('lname');
        $table->string('userid');
        $table->string('psw');
        $table->string('email');

	   $table->integer('year');
        $table->string('term');
        $table->string('course_num');
        $table->string('title');
        $table->string('type');
        $table->string('time');

    });
}







	public function down()
	{
		Schema::drop('timetables');
	}

}
