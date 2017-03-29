<?php namespace App\Http\Controllers;

use App\Contact;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller {

    public function getList(){
        $data = Contact::select('id','dichvu','name','alias','email','telno','address','thanhtoan','content','status','created_at','updated_at')->orderBy('id','DESC')->get()->toArray();
        return view('admin.contact.list',compact('data'));
    }
    public function getDelete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('admin.contact.list')->with(['flash_level'=>'success','flash_message'=>'Success! Complete Delete Contact']);
    }
    public function getChange($id){
        $contact = Contact::find($id);
        if(($contact->status) == 0)
            $contact->status  = 1;
        elseif(($contact->status)  == 1)
            $contact->status  = 2;
        elseif(($contact->status) == 2)
            $contact->status  = 0;
        $contact->save();
        return redirect()->route('admin.contact.list');
    }

}
