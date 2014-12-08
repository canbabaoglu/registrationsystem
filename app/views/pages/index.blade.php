@extends('layout')

@section('page-title')
	Registration System Homepage
@stop

@section('page-content')

	<div class="jumbotron">

		@if (Auth::check()) 
			<h2>Hi {{ Auth::user()->firstname }},</h2>
			<p>Welcome to my awesome app that doesn't do anything.</p>
			<p>This is the dev branch.</p>
		@else

			<h1>My Registration System</h1>
			<p>This is the registration system I've built with Laravel. Now, thanks to Forge, whenever I push to GitHub, the site is being auto-deployed. </p>
			<p>This is the dev branch.</p>
			<p>
				<a class="btn btn-primary btn-lg" href="/register" role="button">Register now!</a> 
				<a class="btn btn-link" href="/login" role="button">Already have an account? Login.</a>
			</p>



		@endif
	</div>

	

@stop