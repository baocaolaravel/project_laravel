@extends('home.master')
@section('content')
<!-- About Section -->
<section id="about" class="about-section">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-12">
                <h1>About Section</h1>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section" style="height: 1000px;">
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
                        @foreach($product as $item)
                            <div class="col-md-4 portfolio-item">
                                <a href="#">
                                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                                </a>
                                <h3>
                                    <a href="#">Project Name</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                            </div>
                        @endforeach
                        </div>
                        <!-- /.row -->

                        <hr>
                        <!-- Pagination -->
                        <div class="row text-center" style="margin-top: -10px;">
                            <div class="col-lg-12">
                                <ul class="pagination">
                                    <li>
                                        <a href="#">&laquo;</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">&raquo;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->

                </div>
            </div>
        </div>
    </section>
@endsection