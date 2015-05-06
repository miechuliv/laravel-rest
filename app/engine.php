<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class engine extends Model {

	//

	public function cartype()
    {
        return $this->belongsTo('App\Cartype');
    }
}
