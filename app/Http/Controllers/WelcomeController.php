<?php namespace App\Http\Controllers;
use DB;
use App\Contact;
use App\Http\Requests;
use Mail;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use Request;
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
	public function chitiettintuc($id)
	{
		$tintuc_chitiet = DB::table('tintucs')->where('id',$id)->first();
		return view('home.pages.tintuc',compact('tintuc_chitiet'));
	}
	public function loaidichvu($id)
	{
		$tintuc = DB::table('tintucs')->select('id','name','image','intro','content','alias')->orderBy('id','DESC')->paginate(6);
		$loaidv = DB::table('products')->select('id','name','image','alias','cate_id','description')->where('cate_id',$id)->paginate(6);
		return view('home.pages.loaidv',compact('loaidv','tintuc'));
	}
	public function gioithieu()
	{
		return view('home.pages.gioithieu');
	}
	public function chitietdichvu($id)
	{	
		$tintuc = DB::table('tintucs')->select('id','name','image','intro','content','alias')->orderBy('id','DESC')->paginate(6);
		$chitiet_dichvu = DB::table('products')->where('id',$id)->first();
		$chuyensang_dk = DB::table('products')->where('id',$id)->first(); 
		return view('home.pages.chitietdv',compact('chitiet_dichvu','tintuc','chuyensang_dk'));
	}
	public function chuyensangdangky($id)
	{	
		$tintuc = DB::table('tintucs')->select('id','name','image','intro','content','alias')->orderBy('id','DESC')->paginate(6);
		$chuyensang_dk = DB::table('products')->where('id',$id)->first(); 
		return view('home.pages.dangkysd',compact('chuyensang_dk','tintuc'));
	}
	public function post_dangkysd(ContactRequest $contact_request){
        $contact = new Contact();
        $contact->dichvu = $contact_request->hiddichvu;
        $contact->name = $contact_request->txtName;
        $contact->alias = changeTitle($contact_request->txtName);
        $contact->email = $contact_request->txtEmail;
        $contact->telno = $contact_request->txtTelno;
        $contact->address = $contact_request->txtAddress;
        $contact->thanhtoan = $contact_request->sltthanhtoan;
        $contact->content = $contact_request->txtContent;
        $contact->status  = 0;
        $contact->save();
        echo "<script>
        alert('Cảm ơn! quý khách đã gửi yêu cầu đăng ký. Chúng tôi sẽ liên lạc với quý khách trong thời gian sớm nhất');
        window.location = '".url('/')."'
        </script>";
        die;
        $data =['hoten'=> ContactRequest::input('name')];
        Mail::send('emails.blanks',$data,function ($msg){
            $msg->from('ntkiet27595@gmail.com','Tuấn Kiệt');
            $msg->to('mitanit000@gmail.com','Tuyết Kha')->subject('Đây là mail xác nhận liên hệ');
        });
        return redirect()->route('admin.contact.list')->with(['flash_level'=>'success','flash_message'=>'Success! Complete Add Contact']);
    }
}

