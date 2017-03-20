<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model {

	 protected $table = 'news';

	    protected  $fillable = ['name','alias','intro','content','image','keywords','description','user_id','cate_id'];

	    public function cate(){
	        return $this->belongsTo('App\Cate');
        }
        public  function user(){
	        return $this->belongsTo('App\User');
        }
}
