@extends('admin.master')
@section('controller','Liện hệ')
@section('action','Danh sách')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Nội dụng</th>
            <th>Thời gian</th>
            <th>Trạng thái</th>
            <th>Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 0?>
        @foreach($data as $item)
            <?php $stt = $stt + 1 ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item["name"] !!}</td>
            <td>{!! $item["email"] !!}</td>
            <td>{!! $item["telno"] !!}</td>
            <td>{!! $item["address"] !!}</td>
            <td>{!! $item["content"] !!}</td>
            <td>{!! \Carbon\Carbon::createFromTimestamp(strtotime($item["created_at"]))->diffForHumans() !!}</td>
            <td class="center"><a href="{!! URL::route('admin.contact.getChange',$item['id']) !!}" onclick="return dalienlac('Đã liên lạc rồi!!')">
                    @if($item["status"]== 0)
                        <i class="fa fa-times  fa-fw"></i>
                        @else
                        <i class="fa fa-check  fa-fw"></i>
                    @endif
                </a></td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.contact.getDelete',$item['id']) !!}" onclick="return xacnhanxoa('Bạn có chắc muốn xóa sản phẩm này không!')"> Xóa</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection()