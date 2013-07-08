<?php

class Download extends Eloquent {

    protected $table = 'downloads';

    public function adds()
    {
    	return $this->hasMany('Add');
    }

}