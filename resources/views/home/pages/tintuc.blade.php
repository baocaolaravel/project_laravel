@extends('home.master')
@section('description', 'Đây là trang tin tức!')
@section('content')
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
      <div class="col-lg-12">
         <h1  style="font-family: 'Oswald', sans-serif;">TIN TỨC
         </h1>
         <hr>
      </div>
   </div>
   <div class="row">
   <!-- Blog Post Content Column -->
   <div class="col-lg-9">
      <!-- Blog Post -->
      <!-- Title -->
      <h1 style="font-family: 'Oswald', sans-serif; text-align: left;">{!! $tintuc_chitiet->name !!}</h1>
      <!-- Date/Time -->
      <p style="font-family: 'Oswald', sans-serif; text-align: left; font-size: 10pt;"><span class="glyphicon glyphicon-time"></span> Posted on {!! $tintuc_chitiet->created_at !!} by admin</p>
      <hr>
      <!-- Post Content -->
      <p >{!! $tintuc_chitiet->intro !!}</p>
      <p >{!! $tintuc_chitiet->content !!}</p>
      <!-- Comments Form -->
      <div class="well">
         <h4>Leave a Comment:</h4>
         <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </div>
   </div>
</section>
</div>
@endsection