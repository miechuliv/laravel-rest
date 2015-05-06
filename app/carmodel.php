<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class carmodel extends Model {

	//
	public function carmake()
    {
        return $this->belongsTo('App\Carmake');
    }

	public function cartypes()
    {
        return $this->hasMany('App\Cartype');
    }
}
