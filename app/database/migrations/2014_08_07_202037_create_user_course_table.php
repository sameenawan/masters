<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCourseTable extends Migration {

	
public function up() {

    Schema::create('user_course', function($table) {

        
        
        $table->timestamps();

        # The rest of the fields...

			$table->integer('user_id')->unsigned();
			$table->integer('course_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('course_id')->references('id')->on('courses');



    });
}







	public function down()
	{
		Schema::drop('user_course');
	}

}

