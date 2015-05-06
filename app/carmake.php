<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class carmake extends Model {

	//
	protected $fillable = ['name'];
	protected $hidden = ['id','created_at','updated_at'];
	
	public function carmodels()
    {
        return $this->hasMany('App\Carmodel');
    }

}
