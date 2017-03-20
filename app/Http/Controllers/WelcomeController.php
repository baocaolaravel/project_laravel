<?php namespace App\Http\Controllers;
use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tintuc = DB::table('tintucs')->select('id','name','image','intro','content','alias')->orderBy('id','DESC')->paginate(6);
		return view('home.pages.about',compact('tintuc'));
	}
	public function loaisanpham() {
		return view('user.pages.cate');
	}
}

