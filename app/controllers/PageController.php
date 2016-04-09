<?php
include_once app_path() .'/modules/PHP/jsonWriter.php';
class PageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'PagesController@index');
	|
	*/

	public function index()
	{
		
	}

	public function services()
	{
		
	}

	public function contact()
	{
		
	}

	public function login()
	{

	}

	public function edit_page()
	{
		if (!Auth::check())
			return Redirect::to('login');

		$website = Auth::user()->websites()->find(Route::input('website_id'));
		if ($website === null)
			return View::make('error')->with('message', "The website you are trying to access does not belong to you.")->with('subtitle', "Error");

		$page = $website->pages()->find(Route::input('page_id'));

		if ($page === null)
			return View::make('error')->with("message", "The page you are trying to access does not belong to you.")->with('subtitle', "Error");;

		$data['sections'] = $page->sections;
		$data['website'] = $website;
                $data['page'] = $page;
		return View::make('page.edit', $data)->with('subtitle', 'Edit page');
	}
        
        public function update_json() {
            $error = "Well done! changes made.";
            $post = Input::all();
            $costumerFtpCredentials = array('server' => $post['remoteJson'],
                                            'user' => $post['ftpUser'],
                                            'passw' => $post['ftpPassword'],
                                            'destination' => $post['pathToJson']
                                            );
            
            $toJSON_OK = formToJSON($post, $post['pathToJson'] );
            if ( !$toJSON_OK[0] ) { $error = "Couldn't perform operation, try again!"; }
            $toRemoteJson_OK = formToJSON($post, $post['pathToRemoteJson']);
            if ( !$toRemoteJson_OK[0] ) { $error = "Couldn't upload to remote file, try again!"; }
            if($costumerFtpCredentials['server'] != NULL) { // if theres no server name, this website is local
            $fileUp = ftpFileToCostumerServer($post['pathToJson'], $costumerFtpCredentials);
                if(!$fileUp[0]) { 
                    $error = "Not possible to update file remotely, please try again later";
                }
             }

            return Redirect::to($post['callingUrl'])->withErrors($error);
         }


}