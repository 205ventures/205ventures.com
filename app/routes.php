
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

Route::get('/', array('as' => 'home', function()
{
    return View::make('index')->with(array('subtitle'=>'Home'));
}));

Route::get('services', array('as' => 'services', function()
{
    return View::make('services')->with('subtitle', 'Services');
}));

Route::get('contact', array('as' => 'contact', function()
{
    return View::make('contact')->with('subtitle', 'Contact');
}));
Route::get('about', array('as' => 'about', function()
{
  return View::make('about')->with('subtitle', 'About');
}));
Route::post('contact', array('as' => 'contact', function()
{
   $data = array('name' => Input::get('name'),
                'email' => Input::get('email'),
                'text' => Input::get('message'));
   if(Mail::send('emails.email_from_contact_page', $data , function($message){
      $message->to('sales@205ventures.com', Input::get('name'))->subject('Email from 205ventures Contact page');
    })){
       return Redirect::to('user/contact')->with('subtitle', 'Thank you'); 
    }else{
       return Redirect::to('contact')->with('subtitle', 'Contact')->withInput(Input::old())->withErrors("Email could not be sent at this moment, please try again!"); 
    }
    
}));

Route::get('login', array('as' => 'login', function()
{
	if (Auth::check())
               return Redirect::action('UserController@dashboard');
   
   return View::make('login')->with('subtitle', 'Customer Log In');
}));

Route::get('user/contact', function()
{
    return View::make('user.contact')->with('subtitle', 'Thank you');
});

Route::get('dashboard', array(
	'as' => 'dashboard',
	'uses' => 'UserController@dashboard'
));

Route::group(array('prefix' => 'account'), function(){
    
    
    Route::get('/create', array('as' => 'create', function()
    {
        return View::make('account/create')->with('subtitle', 'Create account');
    }));

    Route::post('/create', array('as' => 'create', 'uses' => 'AccountController@validateAccountFields'));
    
});

//Route::resource('account', 'AccountController');
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@doLogout'));

Route::get('user/edit_login_info', array(
    'as' => 'edit_login_info',
    'uses' => 'UserController@edit_login_information'
));

Route::get('user/edit_contact_info', array(
    'as' => 'edit_contact_info',
    'uses' => 'UserController@edit_contact_information'
));

Route::post('update_login_information', array(
    'as' => 'update_login_information',
    'uses' => 'UserController@update_login_information'
));

Route::get('cancel', array('as' => 'cancel', function()
{
    return Redirect::action('UserController@dashboard');
}));

Route::get('website/edit_website/{id}', array(
    'as' => 'edit_website',
    'uses' => 'WebsiteController@edit_website'
));

Route::get('page/edit_page/{website_id}/{page_id}', array(
    'as' => 'edit_page',
    'uses' => 'PageController@edit_page'
));
Route::post('page/edit_page/{website_id}/{page_id}', array(
    'as' => 'edit_page',
    'uses' => 'PageController@update_json'
));


