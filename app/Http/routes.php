<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::group(['prefix'=>'cate'],function (){
        Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
        Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
        Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
    });
    Route::group(['prefix'=>'product'],function (){
        Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@getList']);
        Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
        Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
        Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
    });
    Route::group(['prefix'=>'cate_tintuc'],function (){
        Route::get('list',['as'=>'admin.cate_tintuc.list','uses'=>'CateTintucController@getList']);
        Route::get('add',['as'=>'admin.cate_tintuc.getAdd','uses'=>'CateTintucController@getAdd']);
        Route::post('add',['as'=>'admin.cate_tintuc.postAdd','uses'=>'CateTintucController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.cate_tintuc.getDelete','uses'=>'CateTintucController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.cate_tintuc.getEdit','uses'=>'CateTintucController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.cate_tintuc.postEdit','uses'=>'CateTintucController@postEdit']);
    });
    Route::group(['prefix'=>'tintuc'],function (){
        Route::get('list',['as'=>'admin.tintuc.list','uses'=>'TintucController@getList']);
        Route::get('add',['as'=>'admin.tintuc.getAdd','uses'=>'TintucController@getAdd']);
        Route::post('add',['as'=>'admin.tintuc.postAdd','uses'=>'TintucController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.tintuc.getDelete','uses'=>'TintucController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.tintuc.getEdit','uses'=>'TintucController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.tintuc.postEdit','uses'=>'TintucController@postEdit']);
    });
    Route::group(['prefix'=>'user'],function (){
        Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
        Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
        Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
        Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
    });
    Route::group(['prefix'=>'contact'],function (){
        Route::get('list',['as'=>'admin.contact.list','uses'=>'ContactController@getList']);
        Route::get('delete/{id}',['as'=>'admin.contact.getDelete','uses'=>'ContactController@getDelete']);
        Route::get('change/{id}',['as'=>'admin.contact.getChange','uses'=>'ContactController@getChange']);
    });
});

Route::get('loai-dich-vu/{id}/{tenloai}',['as'=>'loaidichvu','uses'=>'WelcomeController@loaidichvu']);
Route::get('gioi-thieu',['as'=>'gioithieu','uses'=>'WelcomeController@gioithieu']);
Route::get('chi-tiet-tin-tuc/{id}/{loaitin}',['as'=>'chitiettintuc','uses'=>'WelcomeController@chitiettintuc']);
Route::get('chi-tiet-dich-vu/{id}/{loaitin}',['as'=>'chitietdichvu','uses'=>'WelcomeController@chitietdichvu']);
Route::get('chuyen-sang-dang-ky/{id}/{dichvu}',['as'=>'chuyensangdangky','uses'=>'WelcomeController@chuyensangdangky']);
Route::post('dang-ky-du-dung',['as'=>'postdangkysd','uses'=>'WelcomeController@post_dangkysd']);








