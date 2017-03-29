<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model {

	 protected $table = 'tintucs';

	    protected  $fillable = ['name','alias','intro','content','image','keywords','description','user_id','cate_id'];

	    public function cate(){
	        return $this->belongsTo('App\CateTintuc');
        }
        public  function user(){
	        return $this->belongsTo('App\User');
        }
}
