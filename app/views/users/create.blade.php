@extends('layout')

@section('page-title')
	Registration Page
@stop

@section('page-content')

	<div class= "col col-md-6 col-md-offset-3 form-container">
		<h1>Register Now!</h1>

		{{ Form::open(['route' => 'users.store', 'role' => 'form'] ) }}

			<!-- Firstname -->
			<div class="form-group">
				{{ Form::label('firstname', 'Firstname:') }}
				{{ Form::text('firstname', null, ['placeholder' => 'Please enter your firstname', 'class' => 'form-control', 'required'=>'required' ]) }}
				<span class="error">{{ $errors->first('firstname') }}</span>
			</div>

			<div class="form-group">
				{{ Form::label('lastname', 'Lastname:') }}
				{{ Form::text('lastname', null, ['placeholder' => 'Please enter your lastname', 'class' => 'form-control', 'required'=>'required' ]) }}
				<span class="error">{{ $errors->first('lastname') }}</span>
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['placeholder' => 'Please enter your email address', 'class' => 'form-control', 'required'=>'required']) }}
				<span class="error">{{ $errors->first('email') }}</span>
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['placeholder' => 'Please create a  password', 'class' => 'form-control', 'required'=>'required' ]) }}
				<span class="error">{{ $errors->first('password') }}</span>
			</div>

			<div class="form-group">
				{{ Form::label('password_confirmation', 'Confirm your password:') }}
				{{ Form::password('password_confirmation', ['placeholder' => 'Please re-enter your password to confirm it', 'class' => 'form-control', 'required'=>'required' ]) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Create your account', ['class'=>'btn btn-primary']) }} 
				<a class="btn btn-link" href="/login" role="button">Already have an account? Login.</a>
			</div>

		{{ Form::close() }}


	</div>

@stop