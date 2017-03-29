@extends('admin.master')
@section('controller','Tin tức')
@section('action','Danh sách')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Hình ảnh</th>
            <th>Tên</th>
            <th>Thời gian</th>
            <th>Loại tin</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 0?>
        @foreach($data as $item)
            <?php $stt = $stt + 1 ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td><img src="{!! asset('resources/upload/'.$item['image']) !!}" style="height: 100px; width: 150px;"></td>
            <td>{!! $item["name"] !!}</td>
            <td>{!! \Carbon\Carbon::createFromTimestamp(strtotime($item["created_at"]))->diffForHumans() !!}</td>
            <td><?php $cate = DB::table('cate_tintucs')->where('id',$item["cate_id"])->first() ?>
                @if(!empty($cate->name))
                    {!! $cate->name !!}
                @endif
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.tintuc.getDelete',$item['id']) !!}" onclick="return xacnhanxoa('Bạn có chắc muốn xóa tin tức này không!')"> Xóa</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.tintuc.getEdit',$item['id']) !!}">Sửa</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection()