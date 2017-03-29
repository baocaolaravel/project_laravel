<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CateTintuc extends Model {

	protected $table = 'cate_tintucs';

	protected $fillable = ['name','alias','image','order','parent_id','keywords','description'];

	public  function tintuc () {
	    return $this->hasMany('App\Tintuc');
	}

}