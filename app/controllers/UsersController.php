<?php

class UsersController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}
	
	public function postCreate()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
		    $user = new User;
		    $user->username = Input::get('username');
		    $user->email = Input::get('email');
		    $user->type = 'Integrant';
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		 	$user_id = $user->id;
		 	$userProfile = new UsersProfile;
		 	$userProfile->fullname = Input::get('fullname');
		 	$userProfile->website = Input::get('website');
		 	$userProfile->about = Input::get('about');
		 	$userProfile->user_id = $user_id;
		 	$userProfile->save();
		    return Redirect::to('users/login')->with('message', 'Thanks for registering!');
		} else {
		    return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}

	public function postSignin(){
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
		    return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
		} else {
		    return Redirect::to('users/login')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput();
		}
	}

	public function getDashboard(){
		return View::make('dashboard');
	}

	public function getLogout(){
		Auth::logout();
    	return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}
}