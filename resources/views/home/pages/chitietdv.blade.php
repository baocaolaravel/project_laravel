@extends('home.master')
@section('content')
@section('description', 'Đây là trang chủ!')
<!-- About Section -->

<div class="container-fluid">
<section id="about" class="about-section" style="background: #fff;">
   <div class="col-md-10 col-md-offset-1">
   <div class="row">
      <div class="col-lg-12">
         <h1  style="font-family: 'Oswald', sans-serif;">CHI TIẾT DỊCH VỤ
         </h1>
         <hr>
      </div>
   </div>
   <!-- Blog Post Content Column -->
      <div class="col-lg-12">
         <!-- Blog Post -->
         <!-- Title -->
         <div class="row">

            <div class="col-lg-3 well"">
               <h4 style="font-family: 'Oswald', sans-serif; text-align: center;">CÁC GÓI DỊCH VỤ</h4>
               <hr>
                  <ul style="list-style-type: none; margin: 0; padding: 0; text-align: left; ">
                     <?php
                        $menu_level_1 = DB::table('cates')->where('parent_id',0)->orderBy('id','DESC')->get(); 
                     ?>
                     @foreach($menu_level_1 as $item_level_1)
                        <?php
                           $menu_level_2 = DB::table('cates')->where('parent_id',$item_level_1->id)->get();
                        ?>
                        @foreach($menu_level_2 as $item_level_2)
                           <a style="text-decoration: none; color: #F37022; font-size: 13pt;">{!! $item_level_2->name !!}</a>
                           <?php
                           $menu_level_3 = DB::table('products')->where('cate_id',$item_level_2->id)->get();
                           ?>
                              <ul style="list-style-type: none; margin-left: 20px; padding: 0;">
                                 @foreach($menu_level_3 as $item_level_3)
                                    <li><a href="{!! url('chi-tiet-dich-vu',[$item_level_3->id,$item_level_3->alias]) !!}#about" style="color: #111; font-size: 11pt; bor">{!! $item_level_3->name !!}</a></li>
                                 @endforeach
                              </ul>
                        @endforeach 
                     @endforeach
                  </ul>
            </div>
            <div class="col-lg-9">
               <div class="well">
                  <h1 style="font-family: 'Oswald', sans-serif; text-align: center; font-size: 25pt; margin-left: 20px; color: #FB5500;">GÓI DỊCH VỤ {!! $chitiet_dichvu->name !!}</h1>
                  <h4 style="font-family: 'Oswald', sans-serif; text-align: center; margin-left: 20px">{!! $chitiet_dichvu->description !!}</h4>
                  <hr>
                  <!-- Post Content -->
                  
                  <div class="row">
                     <div class="col-lg-7">
                     <h3 style="font-family: 'Oswald', sans-serif;">Thông tin dịch vụ</h3>
                     <p style="text-align: left;">{!! $chitiet_dichvu->intro !!}</p>
                   
                        <a href="{!! url('chuyen-sang-dang-ky',[$chuyensang_dk->id,$chuyensang_dk->alias]) !!}#about"><button  style="margin-top: 20px; " class="btn btn-success btn-lg" >Đăng ký sử dụng gói</button></a>
                     
                     </div>
                     <div class="col-lg-5" style="border-left-style: solid;">
                     <h3 style="font-family: 'Oswald', sans-serif;">Chương trình khuyến mại</h3>
                     <p style="text-align: left;">{!! $chitiet_dichvu->content !!}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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