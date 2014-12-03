@extends('layout');

@section('page-title')
	Login Page
@stop

@section('page-content')

	<div class= "col col-md-6 col-md-offset-3 form-container">
		<h1>Login Now!</h1>

		{{ Form::open(['route' => 'sessions.store', 'role'=>'form']) }}

			@if (Session::has('flash_message'))
				<div class="alert alert-danger" role="alert">
					
					<h4>Your login attempt was unsuccessful :(</h4>
					<p> {{ Session::get('flash_message') }} </p>

				</div>
			@endif

			<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Please enter the email you registered with']) }}
				<span class="error">{{ $errors->first('email') }}</span>
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Please enter your password']) }}
				<span class="error">{{ $errors->first('password') }}</span>
			</div>

			<div class="form-group">
				{{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
			</div>

		{{ Form::close() }}

	</div>

@stop