@extends('home.master')
@section('content')
@section('description', 'Đây là trang chủ!')
<!-- About Section -->
<section id="about" class="about-section" style="height: 660px;">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-12">
                <h1>About Section</h1>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section" style="height: 1100px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-12">

                        <!-- Page Header -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header" style="font-family: 'Oswald', sans-serif;">TIN TỨC
                                </h1>
                            </div>
                        </div>
                        <!-- /.row -->

                        <!-- Projects Row -->
                        <div class="row">
                        @foreach($tintuc as $item)
                            <div class="col-md-4 portfolio-item">
                                <a href="#">
                                    <div style="height: 200px;">
                                        <img class="img-responsive" src="{!! asset('resources/upload/'.$item->image) !!}" alt="">
                                    </div>
                                </a>
                                <h3>
                                    <a href="#" style="font-size: 15pt; font-family: 'Oswald', sans-serif;">{!! $item->name !!}</a>
                                </h3>
                                <a style="font-size: 10pt; font-family: 'Oswald', sans-serif; color: #111;">{!! $item->intro !!}</a>
                            
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
@endsection