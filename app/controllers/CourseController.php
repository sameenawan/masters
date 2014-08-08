<?php

class CourseController extends \BaseController {


	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		
		# Make sure BaseController construct gets called
		parent::__construct();		
		
		# Only logged in users should have access to this controller
		$this->beforeFilter('auth');
		
	}
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function getSearch() {
				
		return View::make('course_search');
		
	}
	
	
	/*-------------------------------------------------------------------------------------------------
	http://localhost/course/search
	Demonstrate of Ajax
	-------------------------------------------------------------------------------------------------*/
	public function postSearch() {
		
		if(Request::ajax()) {
		
			$query  = Input::get('query');
			
			# We're demoing two possible return formats: JSON or HTML
			$format = Input::get('format');

			# Do the actual query
	        $courses  = Course::search($query);
	        
	        # If the request is for JSON, just send the courses back as JSON
	        if($format == 'json') {
		        return Response::json($courses);
	        }
	        # Otherwise, loop through the results building the HTML View we'll return
	        elseif($format == 'html') {
	        

		        $results = '';	        
				foreach($courses as $course) {
					# Created a "stub" of a view called course_search_result.php; all it is is a stub of code to display a course
					# For each course, we'll add a new stub to the results
					$results .= View::make('course_search_result')->with('course', $course)->render();   
				}
	        
				# Return the HTML/View to JavaScript...
				return $results;
			}
		}
	}


	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function getIndex() {
	
		# Format and Query are passed as Query Strings
		$format = Input::get('format', 'html');
		
		$query  = Input::get('query');
		
		$courses = Book::search($query);
		
		# Decide on output method...
		# Default - HTML
		if($format == 'html') {
			return View::make('course_index')
				->with('courses', $courses)
				->with('query', $query);
		}
		# JSON
		elseif($format == 'json') {
			return Response::json($courses);
		}
		# PDF (Coming soon)
		elseif($format == 'pdf') {
			return "This is the pdf (Coming soon).";
		}
		
		
	}
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function getEdit($id) {
		
		$course = Book::with('author')->findOrFail($id);
				
		$authors = Author::getIdNamePair();
						
		return View::make('course_edit')
			->with('course', $course)
			->with('users', $users);
		
	}
	
	
	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function postEdit($id) {
		
		$course = Book::findOrFail($id);
		$course->fill(Input::all());
		$course->save();
		
		return Redirect::action('CourseController@getIndex')->with('flash_message','Your changes have been saved.');
		
	}
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function getCreate() {
	
		$authors = Author::getIdNamePair();
	
		return View::make('course_create')->with('authors', $authors);
	}
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function postCreate() {
		
		# Instantiate the course model
		$course = new Book();
		
		$course->fill(Input::all());
		$course->save();
		
		# Magic: Eloquent
		$course->save();
		
		return Redirect::action('BookController@getIndex')->with('flash_message','Your course has been added.');

	}
	
}
