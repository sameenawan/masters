<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {



public function up() {

    Schema::create('courses', function($table) {

        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        $table->timestamps();

        # The rest of the fields...
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
		Schema::drop('courses');
	}

}
