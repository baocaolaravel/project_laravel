<?php namespace App\Http\Controllers;

use App\Contact;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Http\Requests\ContactRequest;

class DangkysdController extends Controller {

	public function getAdd()
	{
		$tintuc = DB::table('tintucs')->select('id','name','image','intro','content','alias')->orderBy('id','DESC')->paginate(6);
		return view('home.pages.camon',compact('tintuc'));
	}
	public function postAdd(ContactRequest $contact_request){
		print_r($contact_request->txtName);
		die;
        $contact = new Contact();
        //*$contact->dichvu = $request->h2dichvu;
        $contact->name = $request->txtName;
        $contact->alias = changeTitle($request->txtName);
        $contact->email = $request->txtEmail;
        $contact->telno = $request->txtTelno;
        $contact->address = $request->txtAddress;
        //*$contact->thanhtoan = $request->sltthanhtoan;
        $contact->content = $request->txtContent;
        $contact->status  = 0;
        $contact->save();
        /*$data =['hoten'=> ContactRequest::input('name')];
        Mail::send('emails.blanks',$data,function ($msg){
            $msg->from('ntkiet27595@gmail.com','Tuấn Kiệt');
            $msg->to('mitanit000@gmail.com','Tuyết Kha')->subject('Đây là mail xác nhận liên hệ');
        });
        return redirect()->route('admin.contact.list')->with(['flash_level'=>'success','flash_message'=>'Success! Complete Add Contact']);*/
    }

}
