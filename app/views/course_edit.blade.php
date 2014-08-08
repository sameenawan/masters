@extends('_master')


@section('title')
	Edit Book
@stop



@section('content')

	{{ Form::model($course, ['method' => 'post', 'action' => ['CourseController@postEdit', $course->id]]) }}
	
		<h2>Update: {{ $course->name }}</h2>
	
		<div class='form-group'>
			{{ Form::label('name', 'Title') }}
			{{ Form::text('title') }}
		</div>
		
		<div class='form-group'>
			{{ Form::label('course_id', 'Course') }}
			{{ Form::select('course_id', $courses, $course->course_id); }}
		</div>
		
			<div class='form-group'>
			{{ Form::label('user_id', 'User') }}
			{{ Form::select('user_id', $users); }}
		</div>
		





		<div class='form-group'>
			{{ Form::label('year') }} 
			{{ Form::text('year') }}
		</div>

		<div class='form-group'>
			{{ Form::label('term') }} 
			{{ Form::text('term') }}
		</div>

		<div class='form-group'>
			{{ Form::label('course_num') }} 
			{{ Form::text('course_num') }}
		</div>




		<div class='form-group'>
			{{ Form::label('title') }} 
			{{ Form::text('title') }}
		</div>
		
		<div class='form-group'>
			{{ Form::label('type') }} 
			{{ Form::text('type') }}
		</div>


		<div class='form-group'>
			{{ Form::label('time') }} 
			{{ Form::text('time') }}
		</div>

		
		{{ Form::submit('Save') }}
	
	{{ Form::close() }}

@stop