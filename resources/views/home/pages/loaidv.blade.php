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
      </div>
         <div class="row">
            <div class="container-fluid">
               <div class="row no-gutter">
               @foreach($loaidv as $item_loaidv)
                  <div class="col-md-4">
                     <a href="{!! url('chi-tiet-dich-vu',[$item_loaidv->id,$item_loaidv->alias]) !!}#about" class="portfolio-box">
                        <img src="{!! asset('resources/upload/'.$item_loaidv->image) !!}" class="img-responsive" alt="" style="height: 250px; width: 100%;">
                        <div class="portfolio-box-caption" style="background: #eee;">
                           <div class="portfolio-box-caption-content">
                              <div class="project-category text-faded" style="font-size: 30pt; color: #111;">
                                 {!! $item_loaidv->name !!}
                              </div>
                              <div class="project-name" style="font-size: 15pt; color: #111; font-weight: bolder;">
                                 {!! $item_loaidv->description !!}
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               @endforeach  
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