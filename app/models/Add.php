<?php

class Add extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    protected $table = 'adds';

    public function download(){
    	return $this->belongsTo('Download');
    }
}