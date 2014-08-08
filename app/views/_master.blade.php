<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Information Systems Course Choices')</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 62px;
			margin: 16px 0 0 0;
		}
	</style>

@yield('head')
	

</head>
<body>

 @if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif




	@if(Auth::check())
		<a href='/logout'>Log out {{ Auth::user()->email; }}</a><br><br>
		<a href='/course'>View all Books</a> | 
		<a href='/tag'>View all Tags</a>  |
		<a href='/course/search'>Search (with Ajax!)</a>
	@else 
		<a href='/signup'>Sign up</a> or <a href='/login'>Log in</a>
	@endif
	

	<div class="welcome">
<h1>HELLO WORLD SAMEEN HERE</h1>		
	</div>



	@yield('content')
	
	@yield('body')
	
	@yield('footer')




</body>
</html>
