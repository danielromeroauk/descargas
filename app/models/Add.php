<?php

class Add extends Eloquent {

    protected $table = 'adds';

    public function download()
    {
    	return $this->belongsTo('Download');
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }

}
