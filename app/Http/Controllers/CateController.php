<?php namespace App\Http\Controllers;
    
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use App\Cate;
use Input,File;
use Request;

class CateController extends Controller {

    public function getList(){
        $data = Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
        return view('admin.cate.list',compact('data'));
    }
	public function getAdd(){
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
	    return view('admin.cate.add',compact('parent'));
    }
    public function postAdd(CateRequest $request){
        $file_name = $request->file('fImages')->getClientOriginalName();
        $cate = new Cate();
        $cate->name = $request->txtCateName;
        $cate->alias = changeTitle($request->txtCateName);
        $cate->order = $request->txtOrder;
        $cate->image = $file_name;
        $cate->parent_id = $request->sltParent;
        $cate->keywords = $request->txtKeywords;
        $cate->description = $request->txtDescription;
        $request->file('fImages')->move('resources/upload/',$file_name);
        $cate->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thành công! Thêm danh mục hoàn tất!']);
    }
    public function getDelete($id){
        $parent = Cate::where('parent_id',$id)->count();
        if($parent ==0){
            $cate = Cate::find($id);
            $cate->delete($id);
            return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thành công! Xóa danh mục hoàn tất!']);
        }else{
            echo "<script type='text/javascript'>
                alert('Xin lỗl! Bạn không thể xóa danh mục này!');
                window.location ='";
                    echo route('admin.cate.list');
            echo"'
            </script>";
        }
    }
    public function getEdit($id){
        $data = Cate::findOrFail($id)->toArray();
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate.edit',compact('parent','data'));
    }
    public function postEdit(Request $request,$id){
        $cate = Cate::find($id);
        $cate->name = Request::input('txtCateName');
        $cate->alias = changeTitle(Request::input('txtCateName'));
        $cate->order = Request::input('txtOrder');
        $cate->parent_id = Request::input('sltParent');
        $cate->keywords = Request::input('txtKeywords');
        $cate->description =Request::input('txtDescription');
        $img_current = 'resources/upload/'.Request::input('img_current');
        if(!empty(Request::file('fImages'))){
            $file_name = Request::file('fImages')->getClientOriginalName();
            $cate->image = $file_name;
            Request::file('fImages')->move('resources/upload/',$file_name);
            if(File::exists($img_current)){
                File::delete($img_current);
            }
        }else{
            echo "Không có File";
        }
        $cate->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thàng công! Sửa sản phẩm hoàng tất!']);
    }

}
