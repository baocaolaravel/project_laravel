@extends('home.master')
@section('content')
@section('description', 'Đây là trang chủ!')
<!-- About Section -->
<div class="container-fluid">
<section id="about" class="about-section" style="background-color: #fff;">
   <div class="col-md-10 col-md-offset-1" style="padding-left: 45px; padding-right: 45px;">
      <div class="row">
         <h1  style="font-family: 'Oswald', sans-serif; font-weight: bolder; color: ">DỊCH VỤ</h1>
         <hr>
         <div class="row">
            <div class="container-fluid">
               <div class="row no-gutter">
                  <?php
                     $menu_level_1 = DB::table('cates')->where('parent_id',0)->orderBy('id','DESC')->get(); 
                     ?>
                  @foreach($menu_level_1 as $item_level_1)
                  <?php
                     $menu_level_2 = DB::table('cates')->where('parent_id',$item_level_1->id)->get();
                     
                     ?>
                  @foreach($menu_level_2 as $item_level_2)
                  <div class="col-md-4">
                     <a href="{!! url('loai-dich-vu',[$item_level_2->id,$item_level_2->alias]) !!}#about" class="portfolio-box">
                        <img src="{!! asset('resources/upload/'.$item_level_2->image) !!}" class="img-responsive" alt="" style="height: 270px; width: 100%;">
                        <div class="portfolio-box-caption" style="background: #eee;">
                           <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded" style="font-size: 26pt; color: #111; font-weight: bold;">
                                 {!! $item_level_1->name !!}
                              </div>
                              <div class="project-name" style="font-size: 37pt; color: #111; font-weight: bold;">
                                 {!! $item_level_2->name !!}   
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  @endforeach  
                  @endforeach
               </div>
            </div>
         </div>
         <hr>
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
            <div class="row">
               <div class="col-lg-9">
                  <?php
                  $menu_level_1 = DB::table('cate_tintucs')->where('parent_id',0)->orderBy('id','DESC')->get(); 
                  ?>
                  @foreach($menu_level_1 as $item_level_1)
                     <div class="col-lg-12">
                     <legend style="text-align: left; font-size: 20pt; font-family: 'Oswald', sans-serif;">{!! $item_level_1->name !!}</legend>
                     </div>
                  <?php
                  $menu_level_2 = DB::table('tintucs')->where('cate_id',$item_level_1->id)->paginate(6); 
                  ?>
                  @foreach($menu_level_2 as $item_level_2)
                     <div class="row">
                        <div class="col-lg-3">
                            <img src="{!! asset('resources/upload/'.$item_level_2->image) !!}" class="img-responsive" alt="" style="width: 100%;"> 
                        </div>
                        <div class="col-lg-9">
                           <p style="text-align: left; font-size: 15pt; font-family: 'Oswald', sans-serif;">{!! $item_level_2->name !!}</p>
                           <p style="text-align: left; font-size: 10pt; font-family: 'Oswald', sans-serif; margin-top: -10px;">{!! $item_level_2->description !!}</p>
                        </div>
                     </div>
                  @endforeach
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
                  @endforeach
               </div>
               <div class="col-lg-3">
               <legend style="text-align: left; font-size: 20pt; font-family: 'Oswald', sans-serif;">Tin tức mới</legend>
                  <?php
                  $menu_tintucmoi_1 = DB::table('tintucs')->orderBy('id','DESC')->paginate(6);
                  ?>
                   @foreach($menu_tintucmoi_1 as $item_tintucmoi_1)
                        
                           <div class="col-lg-12">
                               <img src="{!! asset('resources/upload/'.$item_tintucmoi_1->image) !!}" class="img-responsive" alt="" style="width: 100%;">
                               <legend style="text-align: left; font-size: 12pt; font-family: 'Oswald', sans-serif;">{!! $item_tintucmoi_1->name !!}</legend>
                           </div>
                        
                   @endforeach
               </div>
            </div>
            <!-- /.row -->
            <!-- Projects Row -->
            <!--<div class="row">
               @foreach($tintuc as $item)
               
               <div class="col-md-4 portfolio-item">
               <div class="container-fluid">
                  <a href="">
                        <img class="img-responsive" src="{!! asset('resources/upload/'.$item->image) !!}" alt="" style="height: 200px; width: 100%;">
                  </a>
                  <h3>
                     <a style="font-family: 'Oswald', sans-serif;" href="{!! url('chi-tiet-tin-tuc',[$item->id,$item->alias]) !!}#services" >{!! $item->name !!}</a>
                  </h3>
                  <a style="font-size: 5pt; font-family: 'Oswald', sans-serif; color: #111;" href="{!! url('chi-tiet-tin-tuc',[$item->id,$item->alias]) !!}#services">{!! $item->intro !!}</a>
               </div>
               </div>
               @endforeach
            </div>
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
            </div>-->
            <!-- /.row -->
         </div>
      </div>
   </div>
</section>
</div>
@endsection