<?php

use RegistrationSystem\Forms\LoginForm;

class SessionsController extends \BaseController {

	private $loginForm;


	public function __construct(LoginForm $loginForm)
	{
		$this->loginForm = $loginForm;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//hello
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('email', 'password');
		$this->loginForm->validate($input);

		if (Auth::attempt($input))
		{
			return Redirect::intended('/');
		}

		return Redirect::back()->withInput()->withFlashMessage('Your login information is incorrect.  Please check your credentials and try again!');


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id=null)
	{
		Auth::logout();

		return Redirect::home();
	}


}
