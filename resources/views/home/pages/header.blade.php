<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background: #FF4500;">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{!! url('/') !!}" style="font-family: 'Fugaz One', cursive;">FPT TELECOM - AN GIANG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{!! url('gioi-thieu') !!}#page-top" style="font-family: 'Oswald', sans-serif; font-size: 15pt;">GIỚI THIỆU</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about" style="font-family: 'Oswald', sans-serif; font-size: 15pt;">DỊCH VỤ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services" style="font-family: 'Oswald', sans-serif; font-size: 15pt;">TIN TỨC</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact" style="font-family: 'Oswald', sans-serif; font-size: 15pt;" >LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
</nav>
<!-- Intro Section-->
<div class="container-fluid">
  <section id="intro" class="intro-section">
    <marquee onmouseover="this.stop()" onmouseout="this.start()" style="font-family: 'Oswald', sans-serif; font-size: 15pt; color: #0C4CA3;" scrollamount="12">CHÀO MỪNG QUÝ KHÁCH! CẢM ƠN QUÝ KHÁCH ĐÃ TRUY CẬP WEBSITE FPT TELECOM - AN GIANG</marquee>
         <div class="row">
           <div class="col-md-10 col-md-offset-1" style="padding-left: 40px; padding-right: 40px;">
            <div class="row carousel-holder">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="item active">
                        <img class="slide-image" src="{!! url('public/home/img/banner-truyen-hinh-cap-fpt1.jpg') !!}" style="height: 505px;" ; alt="">
                     </div>
                     <div class="item">
                     <img class="slide-image" src="{!! url('public/home/img/truyen-hinh-fpt-2.png') !!}" alt="" style="height: 505px;" alt="">
                                           </div>
                     <div class="item">
                     <img class="slide-image" src="{!! url('public/home/img/truyền-hình-fpt-thay-áo-mới-copy.jpg') !!}" style="height: 505px;"; alt="">
                                           </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
               </div>
            </div>
      </div>
          </div>
  </section>
</div>