@extends('admin.master')
@section('controller','Danh mục')
@section('action','Thêm')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px" >
        @include('admin.blocks.error')
        <form action="{!! route('admin.cate.getAdd') !!}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
                <label>Danh mục cha</label>
                <select class="form-control" name="sltParent">
                    <option value="0">Vui lòng nhập danh mục cha!</option>
                    <?php cate_parent($parent); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tên danh mục</label>
                <input class="form-control" name="txtCateName" placeholder="Vui lòng nhập tên danh mục!" value="{!! old('txtCateName') !!}" />
            </div>
            <div class="form-group">
                <label>Từ khóa danh mục</label>
                <input class="form-control" name="txtKeywords" placeholder="Vui lòng nhập từ khóa của danh mục!" value="{!! old('txtKeywords') !!}" />
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="fImages" value="{!! old('fImages') !!}">
            </div>
            <div class="form-group">
                <label>Thứ tự danh mục</label>
                <input class="form-control" name="txtOrder" placeholder="Vui lòng nhập thứ tự danh mục!" value="{!! old('txtOrder') !!}" />
            </div>
            <div class="form-group">
                <label>Miêu tả danh mục</label>
                <textarea class="form-control" name="txtDescription" rows="3"> {!! old('txtDescription') !!}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Thêm</button>
            <button type="reset" class="btn btn-default">Làm lại</button>
        </form>
    </div>
@endsection()