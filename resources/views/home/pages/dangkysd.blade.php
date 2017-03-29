@extends('home.master')
@section('content')
@section('description', 'Đây là trang chủ!')
<!-- About Section -->
<div class="container-fluid">
   <section id="about" class="about-section" style="background: #fff;">
      <div class="col-md-10 col-md-offset-1">
         <form class="form-horizontal" method="post" action="{!! url('dang-ky-du-dung') !!}#about">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="row">
               <div class="col-lg-12">
                  <h1  style="font-family: 'Oswald', sans-serif;">CHI TIẾT DỊCH VỤ
                  </h1>
                  <hr>
               </div>
            </div>
            <div class="row well">
               <legend style="font-weight: bolder;">LIÊN HỆ VỚI CHÚNG TÔI NGAY!</legend>
               <div class="col-lg-5">
                  <div style="margin-top: 75px;">
                     <p style="font-size: 20pt; font-weight: bold;">Cảm ơn! quý khách đã chọn đăng ký gói dịch vụ:</p>
                     <h2 style="color: #FB5500;">{!! $chuyensang_dk->name !!}</h2>
                     <input type="hidden" name="hiddichvu" value="{!! $chuyensang_dk->name !!}">
                     <h5>{!! $chuyensang_dk->description !!}</h5>
                     <p style="font-size: 13pt; font-weight: bolder; margin-top: 20px;">Quý khách vui lòng nhập thông tin đăng ký sử dụng!</p>
                  </div>
               </div>
               <div class="col-lg-7" style="margin-top: 30px;">
                  <div class="col-md-8 col-md-offset-3">
                   <div style="text-align: left;" >@include('admin.blocks.error')</div>
                   </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-3 control-label">Họ tên</label>  
                     <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                           <input  name="txtName" placeholder="Nhập họ tên quý khách!" class="form-control"  type="text">
                        </div>
                     </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-3 control-label">E-Mail</label>  
                     <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                           <input name="txtEmail" placeholder="Nhập địa chỉ E-mail của quý khách!" class="form-control"  type="text">
                        </div>
                     </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-3 control-label">Số điện thoại</label>  
                     <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                           <input name="txtTelno" placeholder="Nhập số điện thoại của quý khách!" class="form-control" type="text">
                        </div>
                     </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-3 control-label">Địa chỉ</label>  
                     <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                           <input name="txtAddress" placeholder="Nhập địa chỉ của quý khách!" class="form-control" type="text">
                        </div>
                     </div>
                  </div>
                  <!-- Select Basic -->
                  <div class="form-group">
                     <label class="col-md-3 control-label">Thanh toán</label>
                     <div class="col-md-8 selectContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                           <select name="sltthanhtoan" class="form-control selectpicker" >
                              <option value="">Xin chọn hình thức thanh toán!</option>
                              <option value="Chuyển khoảng ngân hàng">Chuyển khoảng ngân hàng</option>
                              <option value="Thu cước tại nhà">Thu cước tại nhà</option>
                              <option value="Quý khách đến chi nhánh">Quý khách đến chi nhánh</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <!-- Text area -->
                  <div class="form-group">
                     <label class="col-md-3 control-label">Ghi chú</label>
                     <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                           <textarea class="form-control" name="txtContent" placeholder="Nội dung ghi chú!"></textarea>
                        </div>
                     </div>
                  </div>
                  <!-- Success message -->
                  <!-- Button -->
                  <div class="form-group">
                     <label class="col-md-4 control-label"></label>
                     <div class="col-md-4">
                     <a href="{!! url('chuyen-sang-dang-ky',[$chuyensang_dk->id,$chuyensang_dk->alias]) !!}#about"><button type="submit" class="btn btn-warning btn-lg">Xác nhận đăng ký</button></a>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <!-- /.container -->
   </section>
</div>
<!-- Services Section -->
<div class="container-fluid">
   <section id="services" class="services-section">
      <div class="col-md-10 col-md-offset-1">
         <div class="row">
            <div class="col-md-12">
               <!-- Page Header -->
               <div class="row">
                  <h1  style="font-family: 'Oswald', sans-serif;">TIN TỨC
                  </h1>
               </div>
               <hr>
               <!-- /.row -->
               <!-- Projects Row -->
               <div class="row">
                  @foreach($tintuc as $item)
                  <div class="col-md-4 portfolio-item">
                     <div class="container-fluid">
                        <a href="">
                        <img class="img-responsive" src="{!! asset('resources/upload/'.$item->image) !!}" alt="" style="height: 200px; width: 100%;">
                        </a>
                        <h2>
                           <a style="font-family: 'Oswald', sans-serif;" href="{!! url('chi-tiet-tin-tuc',[$item->id,$item->alias]) !!}#services" >{!! $item->name !!}</a>
                        </h2>
                        <a style="font-size: 5pt; font-family: 'Oswald', sans-serif; color: #111;" href="{!! url('chi-tiet-tin-tuc',[$item->id,$item->alias]) !!}#services">{!! $item->intro !!}</a>
                     </div>
                  </div>
                  @endforeach
               </div>
               <!-- /.row -->
               <!-- Pagination -->
               <div style="float: left; color: blue; font-family: 'Oswald', sans-serif; font-size: 15pt;" >Tổng số trang {!! $tintuc->lastPage() !!}</div>
               <div class="col-lg-12">
                  <ul class="pagination pull-right">
                     @if($tintuc->currentPage() != 1)
                     <li><a href="{!! str_replace('/?','?',$tintuc->url($tintuc->currentPage() - 1 )) !!}#services">&laquo;</a></li>
                     @endif
                     @for ($i = 1; $i <= $tintuc->lastPage(); $i = $i +1)
                     <li class="{!! ($tintuc->currentPage() == $i) ? 'active' : '' !!} ">
                        <a class="page-scroll" href="{!! str_replace('/?','?',$tintuc->url($i)) !!}#services">{!! $i !!}</a>
                     </li>
                     @endfor
                     @if($tintuc->currentPage() != $tintuc->lastPage())
                     <li><a href="{!! str_replace('/?','?',$tintuc->url($tintuc->currentPage() + 1 )) !!}#services">&raquo;</a></li>
                     @endif
                  </ul>
               </div>
               <!-- /.row -->
            </div>
         </div>
      </div>
   </section>
</div>
<script type="text/javascript">
      $("#btn_xacnhan").click(function(){
         $.ajax({
            method: "POST",// phương thức dữ liệu được truyền đi
            url: "show_data.php",// gọi đến file server show_data.php để xử lý
            data: $("#dangky_sudung").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
            success : function(response){//kết quả trả về từ server nếu gửi thành công
               console.log(response);
            }
         });
      });   
</script>
@endsection