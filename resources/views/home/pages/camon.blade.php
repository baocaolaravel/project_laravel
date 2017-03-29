@extends('home.master')
@section('content')
@section('description', 'Đây là trang chủ!')
<!-- About Section -->
<div class="container-fluid">
   <section id="about" class="about-section" style="background: #fff;">
      <div class="col-md-10 col-md-offset-1">
         <form class="form-horizontal" method="post" action=""  id="contact_form">
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
               <div class="col-lg-12">
                  <div style="margin-top: 75px;">
                     <h1>CẢM ƠN QUÝ KHÁCH ĐÃ GỬI YÊU CẦU CHO CHÚNG TÔI!</h1>
                     <h3>NHÂN VIÊN CỦA CHÚNG TÔI SẼ LIÊN LỆ VỚI QUÝ KHÁCH NGAY KHI CÓ THỂ!</h3>
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
@endsection