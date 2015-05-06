<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class cartype extends Model {

	//
	public function carmodel()
    {
        return $this->belongsTo('App\Carmodel');
    }

	public function engines()
    {
        return $this->hasMany('App\Engine');
    }

}
