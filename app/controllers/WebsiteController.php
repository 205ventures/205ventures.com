<?php

class WebsiteController extends BaseController {

	public function edit_website()
	{
		if (!Auth::check())
			return Redirect::to('login');
		
		$data['website'] = Auth::user()->websites()->find(Route::input('id'));
		$data['pages'] = $data['website']->pages;
		return View::make('website.edit', $data)->with('subtitle', 'Edit website');
	}

}