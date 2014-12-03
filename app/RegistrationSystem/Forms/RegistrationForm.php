<?php 

namespace RegistrationSystem\Forms;

use Laracasts\Validation\FormValidator;


class RegistrationForm extends FormValidator {

	protected $rules = [
		'firstname' => 'required',
		'lastname'  => 'required',
		'email'     => 'required|email|unique:users',
		'password'  => 'required|confirmed'
	];


}

?>