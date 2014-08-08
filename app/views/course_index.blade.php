@extends('_master')


@section('head')
	<link rel="stylesheet" href="foocourses.css" type="text/css">
@stop

@section('title')
	All your Courses
@stop

@section('content')

	<h2>Courses</h2>

	<div>
		View as:
		<a href='/course/?format=json' target='_blank'>JSON</a> | 
		<a href='/course/?format=pdf' target='_blank'>PDF</a>
	</div>
	
	<div>
		<a href='/course/create'>+ Add a course</a>
	</div>


	@if(trim($query) != "")
		<p>You searched for <strong>{{{ $query }}}</strong></p>
		
		@if(count($courses) == 0)
			<p>No matches found</p>
		@endif
		
	@endif
		
	@foreach($courses as $title => $course)
		
		<section>
			<img class='cover' src='{{ $course['cover'] }}'>
			
			<h2>{{ $course['title'] }}</h2>
			
			<p>			
			{{ $course['author']->name }} {{ $course['published'] }}
			</p>

			<p>
				@foreach($course['tags'] as $tag) 
					{{ $tag->name }}
				@endforeach
			</p>
			
			<a href='{{ $course['cover'] }}'>Purchase this course...</a>
			<br>
			<a href='/course/edit/{{ $course->id }}'>Edit</a>
		</section>
	
	@endforeach

@stop