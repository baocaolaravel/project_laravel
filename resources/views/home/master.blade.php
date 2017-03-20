<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Nhóc Dảnh">

    <title>FPT Telecom - An Giang</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! url('public/home/css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! url('public/home/css/shop-homepage.css') !!}" rel="stylesheet">
    <link href="{!! url('public/home/css/3-col-portfolio.css') !!}" rel="stylesheet">
    <link href="{!! url('public/home/css/stylish-portfolio.css') !!}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{!! url('public/home/css/scrolling-nav.css') !!}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant|Fugaz+One|Oswald" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    #map_canvas {
           width: 100%;
           height: 300px;
           border:solid 1px #ccc;
    }
</style>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    @include('home.blocks.nav')

    <!-- slide -->
    @include('home.blocks.slide')

    <!-- Intro Section -->
    @include('home.blocks.intro')

    
    <!-- Intro Section -->
    @yield('content')
    

    <!-- Contact Section -->
    @include('home.blocks.lienhe')

    <!--Map-->
    
    <div class="col-md-10 col-md-offset-1" style="height: 500px;">
        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/d/embed?mid=14Lqg-tTETf_aV3hH5PacaGFo-GQ" style="height: 450px; width: 100%; "></iframe>
            </div>
        </div>
    </div>

    <!-- Footer-->
    @include('home.blocks.footer')
    
    <!-- jQuery -->
    <script src="{!! url('public/home/js/jquery.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! url('public/home/js/bootstrap.min.js') !!}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="{!! url('public/home/js/jquery.easing.min.js') !!}"></script>
    <script src="{!! url('public/home/js/scrolling-nav.js') !!}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

</body>

</html>
