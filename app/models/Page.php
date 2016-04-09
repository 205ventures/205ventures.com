<?php

class Page extends Eloquent {

	protected $table = 'pages';

    public function websites()
	{
		return $this->belongsTo('Website');
	}

	public function sections()
	{
		return $this->hasMany('Section');
	}
}