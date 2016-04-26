<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="{{URL::asset('bdgwebkit/css/font.css')}}" type="text/css" />
<link rel="stylesheet" href="{{URL::asset('bdgwebkit/css/login.css')}}" type="text/css" />
</head>
<body>
<div class="container">
{!! Form::open(array('url' => 'login')) !!}
	<section id="content">
		
			<h1>Login Form</h1>
		<p>
		{!! $errors->first('email') !!}
		{!! $errors->first('password') !!}
		</p>
		<p>
		{!! Form::label('email', 'Email Address') !!}
		{!! Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) !!}
<p>
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}
</p>

<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}

	</section><!-- content -->
</div><!-- container -->
<!-- if there are login errors, show them here -->

</section>
</div>