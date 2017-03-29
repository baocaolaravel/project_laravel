<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\CateTintuc;
use App\Tintuc;
use App\Http\Requests\TintucRequest;
use Input,File;
use Request;


class TintucController extends Controller {

    public function getList(){
        $data = Tintuc::select('id','name','image','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
        return view('admin.tintuc.list',compact('data'));
    }
    public function getAdd(){
        $cate = CateTintuc::select('id','name','parent_id')->get()->toArray();
        return view('admin.tintuc.add',compact('cate'));
    }
    public function postAdd(TintucRequest $tintuc_request){
        $file_name = $tintuc_request->file('fImages')->getClientOriginalName();
        $tintuc = new Tintuc();
        $tintuc->name = $tintuc_request->txtName;
        $tintuc->alias = changeTitle($tintuc_request->txtName);
        $tintuc->intro = $tintuc_request->txtIntro;
        $tintuc->content = $tintuc_request->txtContent;
        $tintuc->image = $file_name;
        $tintuc->keywords = $tintuc_request->txtKeywords;
        $tintuc->description = $tintuc_request->txtDescription;
        $tintuc->user_id = Auth::user()->id;
        $tintuc->cate_id = $tintuc_request->sltParent;
        $tintuc_request->file('fImages')->move('resources/upload/',$file_name);
        $tintuc->save();
        return redirect()->route('admin.tintuc.list')->with(['flash_level'=>'success','flash_message'=>'Thành công! Tin tức đã được thêm vào!']);
    }
    public function getDelete ($id){
        $tintuc = Tintuc::find($id);
        File::delete('resources/upload/'.$tintuc->image);
        $tintuc->delete();
        return redirect()->route('admin.tintuc.list')->with(['flash_level'=>'success','flash_message'=>'Thành công! Tin tức đã được xóa!']);
    }
    public function getEdit($id){
        $cate = CateTintuc::select('id','name','parent_id')->get()->toArray();
        $tintuc = Tintuc::find($id);
        return view('admin.tintuc.edit',compact('cate','tintuc'));
    }
    public function postEdit($id,Request $request){
        $tintuc = Tintuc::find($id);
        $tintuc->name = Request::input('txtName');
        $tintuc->alias = changeTitle(Request::input('txtName'));
        $tintuc->intro = Request::input('txtIntro');
        $tintuc->content = Request::input('txtContent');
        $tintuc->keywords = Request::input('txtKeywords');
        $tintuc->description = Request::input('txtDescription');
        $tintuc->user_id = Auth::user()->id;
        $tintuc->cate_id = Request::input('sltParent');
        $img_current = 'resources/upload/'.Request::input('img_current');
        if(!empty(Request::file('fImages'))){
            $file_name = Request::file('fImages')->getClientOriginalName();
            $tintuc->image = $file_name;
            Request::file('fImages')->move('resources/upload/',$file_name);
            if(File::exists($img_current)){
                File::delete($img_current);
            }
        }else{
            echo "Không có File";
        }
        $tintuc->save();
        return redirect()->route('admin.tintuc.list')->with(['flash_level'=>'success','flash_message'=>'Thành công! Hoàn thành sửa tin tức']);
    }
}
