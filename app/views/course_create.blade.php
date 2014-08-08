@extends('_master')

@section('title')
	Add a new book
@stop

@section('content')
	
	<h1>Add a New Course</h1>
	
		
	{{ Form::open(array('url' => '/course/create', 'method' => 'POST')) }}

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
		
		
		
		{{ Form::submit('Add') }}
	
	{{ Form::close() }}
	
	
@stop

