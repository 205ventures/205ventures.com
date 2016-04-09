<?php

class Website extends Eloquent {

    protected $table = 'websites';

    public function users()
	{
		return $this->belongsTo('User');
	}

	public function pages()
	{
		return $this->hasMany('Page');
	}
}