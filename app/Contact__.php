<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $table = 'contacts';

    protected  $fillable = ['dichvu','name','alias','email','telno','address','thanhtoan','content','status'];

}
