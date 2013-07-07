<?php

class Download extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    protected $table = 'downloads';

    public function adds(){
    	return $this->hasMany('Add', 'user_id', 'did_id', 'created_at', 'updated_at');
    }
}