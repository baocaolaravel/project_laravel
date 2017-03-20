@extends('admin.master')
@section('controller','Tin tức')
@section('action','Sửa')
@section('content')
    <style>
        .img_current {width: 150px;}
        .img_detail {width: 200px; margin-bottom: 20px;}
        .icon_del {position: relative;margin-left: -20px; margin-top: -70px;}
        #insert {margin-top: 20px;}
    </style>
    <form action="" method="POST" name="frmEditProduct" enctype="multipart/form-data">
    <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.blocks.error')
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="form-group">
                <label>Danh mục cha</label>
                <select class="form-control" name="sltParent">
                    <option value="">Vui lòng chọn danh mục cha!</option>
                    <?php cate_parent($cate,0,"--",$tintuc["cate_id"])?>
                </select>
            </div>
            <div class="form-group">
                <label>Tên tin tức</label>
                <input class="form-control" name="txtName" placeholder="Vui lòng nhập tên tin tức!" value="{!! old('txtName'),isset($tintuc) ? $tintuc['name']:null !!}" />
            </div>
            <div class="form-group">
                <label>Thông tin</label>
                <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro'),isset($tintuc) ? $tintuc['intro']:null !!}</textarea>
                <script type="text/javascript">ckeditor('txtIntro')</script>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent'),isset($tintuc) ? $tintuc['content']:null !!}</textarea>
                <script type="text/javascript">ckeditor('txtContent')</script>
            </div>
            <div class="form-group">
                <label>Hình ảnh hiện hành</label>
                <img src="{!! asset('resources/upload/'.$tintuc['image']) !!}" class="img_current"/>
                <input type="hidden" name="img_current" value="{!! $tintuc['image'] !!}"/>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="fImages">
            </div>
            <div class="form-group">
                <label>Từ khóa tin tức</label>
                <input class="form-control" name="txtKeywords" placeholder="Vui lòng nhập từ khóa tin tức!"value="{!! old('txtKeywords'),isset($tintuc) ? $tintuc['keywords']:null !!}"/>
            </div>
            <div class="form-group">
                <label>Miêu tả tin tức</label>
                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription'),isset($tintuc) ? $tintuc['description']:null !!}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Sửa</button>
            <button type="reset" class="btn btn-default">Làm lại</button>
        </div>
    </form>
@endsection()
