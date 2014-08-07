<?php




Route::get('/', function()
{

	return 'hello world';

});





Route::get('/checktag', function() {

    $user_course = User_Course::all();

    foreach($user_course as $User_Course) {
        echo $user_course;
    }

});







Route::get('/checks', function() {

    $user = User::all();

    foreach($user as $User) {
        echo $user;
    }

});


Route::get('/adduser', function() {




    # Instantiate a new Course model class
    $user = new User();

    # Set 
    $user->fname = 'Afreen';
    $user->lname = 'Awan';
    $user->userid = 'afreena';
    $user->psw = 'a123456';
    $user->email = 'afreen@live.ca';
    
    # This is where the Eloquent ORM magic happens
    $user->save();




    # Instantiate a new Course model class
    $courses = new Course();

    # Set 
    $courses->year = 2015;
    $courses->term = 'January Session';
    $courses->course_num = 'DGMD E-27';
    $courses->title = 'Beyond the Basics of Front-End Web Design';
    $courses->type = 'On Campus only';
    $courses->time = 'Mon, Tues, Wed, Thur 9:00 am to 12:00 pm';


    # This is where the Eloquent ORM magic happens
    $courses->save();



   $courses->user()->attach($user);


    return 'A new user has been added! Check your database to see...';

});

























/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------


Route::get('/delete', function(){

    $user = User::where('fname','LIKE','Sameen')->first();

	$user->delete();

return "delete complete";

});

Route::get('/deletecheck', function(){

        $user = User::all();

    foreach($user as $User) {
        echo $user;
    }


return "delete complete";

});




Route::get('/checkss', function() {

    $user_courses = user_course::all();

    foreach($user_courses as $user_course) {
        echo $user_courses;
    }

});


Route::get('/joins', function() {

    $course->users()->attach($user);


    return 'A new user has been added! Check your database to see...';

});












Route::get('/checks', function() {

    $user = User::all();

    foreach($user as $User) {
        echo $user;
    }

});


Route::get('/adduser', function() {

    # Instantiate a new Course model class
    $user = new User();

    # Set 
    $user->fname = 'Susan';
    $user->lname = 'Buck';
    $user->userid = 'bucks';
    $user->psw = 'a1b2c3';
    $user->email = 'susanbuck@live.ca';
    
    # This is where the Eloquent ORM magic happens
    $user->save();

    return 'A new user has been added! Check your database to see...';

});








Route::get('/check', function() {

    # The all() method will fetch all the rows from a Model/table
    $courses = Course::all();

    # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
    foreach($courses as $Course) {
        echo $courses;
    }

});














Route::get('/addnew', function() {

    # Instantiate a new Course model class
    $courses = new Course();

    # Set 
    $courses->year = 2014;
    $courses->term = 'January Session';
    $courses->course_num = 'DGMD E-27';
    $courses->title = 'Beyond the Basics of Front-End Web Design';
    $courses->type = 'On Campus only';
    $courses->time = 'Mon, Tues, Wed, Thur 9:00 am – 12:00 pm';





    # This is where the Eloquent ORM magic happens
    $courses->save();

    return 'A new course has been added! Check your database to see...';

});






Route::get('/', function()
{

	return 'hello world';

});



Route::get('/practice', function()
{


$fruit = Array('Apples', 'Oranges', 'Pears');
echo Pre::render($fruit,'Fruit');
});


//to see what databases we have created
Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    return Pre::render($results);

});





//to set color names from http command
Route::get('/{color}', function($color)
{


$data['color']=$color;
	
return View::make('hello',$data);


});

*/
