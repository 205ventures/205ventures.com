<?php

class UserController extends BaseController {

	public function login()
	{
		
	}

	public function contact()
	{
		
	}

	public function doLogin()
	{
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		if (Auth::attempt($userdata))
		{
                        echo "user authenticated";
			return Redirect::intended('dashboard');
		}
		else
		{	 	
			return Redirect::to('login')->with('message', "Invalid email or password.");
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function dashboard()
	{
		if (!Auth::check()) {
                        echo "user not authenticated";
			return Redirect::to('login'); 
                             }

		$data['websites'] = Auth::user()->websites;
		$data['email'] = Auth::user()->email;
		$email = Auth::user()->email;

		return View::make('user.dashboard', $data)->with('subtitle', 'Dashboard');
	}

	public function edit_login_information()
	{
		if (!Auth::check())
			return Redirect::to('login');

		$data['email'] = Auth::user()->email;
		return View::make('user.edit_login_information', $data)->with('subtitle', 'Edit log in information');
	}

	public function edit_contact_information()
	{
		if (!Auth::check())
			return Redirect::to('login');

		return View::make('user.edit_contact_information')->with('subtitle', 'Edit contact information');
	}

	public function update_login_information()
	{
		if (!Auth::check())
			return Redirect::to('login');

		if (Input::get('email') != Auth::user()->email)
		{
			$validator = Validator::make(
				array(
					'email' => Input::get('email')
				),
				array(
					'email' => 'required|email|unique:users'
				)
			);

			if ($validator->fails())
			{
				return Redirect::action('UserController@edit_login_information')->withErrors($validator);
			}
		}

		if (Input::get('old_password') != '') {
			Validator::extend('validate_old_password', function($attribute, $value, $parameters)
			{
    			return Hash::check($value, Auth::user()->password);
			});

			$old_password = array('old_password' => Input::get('old_password'));
    		$rule = array('old_password' => 'validate_old_password');
    		$message = array('validate_old_password' => 'The password you entered does not match your current password.');

    		$validator = Validator::make($old_password, $rule, $message);
 
    		if ($validator->fails()) {
    			return Redirect::action('UserController@edit_login_information')->withErrors($validator);
    		}

    		$validator = Validator::make(
				array(
					'password' => Input::get('password'),
					'password_confirmation' => Input::get('password_confirmation'),
					'old_password' => Input::get('old_password')
				),
    			array(
        			'password' => 'confirmed|min:6',
        			'password_confirmation' => 'same:password',
        			'old_password' => 'required'
    			)
    		);

    		if ($validator->fails())
    		{
				return Redirect::action('UserController@edit_login_information')->withErrors($validator);
			}
		}

		if (Input::get('password') != '') {
			$validator = Validator::make(
				array(
					'password' => Input::get('password'),
					'password_confirmation' => Input::get('password_confirmation'),
					'old_password' => Input::get('old_password')
				),
    			array(
        			'password' => 'confirmed|min:6',
        			'password_confirmation' => 'same:password',
        			'old_password' => 'required'
    			)
    		);

    		if ($validator->fails())
    		{
				return Redirect::action('UserController@edit_login_information')->withErrors($validator);
			}
		}

		if (Input::get('password_confirmation') != '') {
			$validator = Validator::make(
				array(
					'password' => Input::get('password'),
					'password_confirmation' => Input::get('password_confirmation'),
					'old_password' => Input::get('old_password')
				),
    			array(
        			'password' => 'confirmed|min:6',
        			'password_confirmation' => 'same:password',
        			'old_password' => 'required'
    			)
    		);

    		if ($validator->fails())
    		{
				return Redirect::action('UserController@edit_login_information')->withErrors($validator);
			}
		}

		
		Auth::user()->email = Input::get('email');
		if (Input::get('password') != '')
			Auth::user()->password = Hash::make(Input::get('password'));
		Auth::user()->save();
		return Redirect::action('UserController@dashboard')->with('message', 'Log in information updated successfully.');
	}
}