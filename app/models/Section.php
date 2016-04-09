<?php

class Section extends Eloquent {
	
	protected $table = 'sections';

    public function pages()
	{
		return $this->belongsTo('Page');
	}
}