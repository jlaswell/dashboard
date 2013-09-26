<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::post('/', function()
{
	dd( Input::all() );
});

Route::get('user', function()
{
	try {
		$user = Sentry::createUser(array(
  	      'email'    => 'john.doe@example.com',
  	      'password' => 'test',
  	  ));
		dd( $user );
	}
	catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
	{
	    echo 'Login field is required.';
	}
	catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
	{
	    echo 'Password field is required.';
	}
	catch (Cartalyst\Sentry\Users\UserExistsException $e)
	{
		return Redirect::back('login')
			->with('email_error', 'User with this login already exists.');
	}
	catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
	{
	    echo 'Group was not found.';
	}	
});

Route::resource('users', 'UserController');