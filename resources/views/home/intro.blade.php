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
    <link href="{!! url('public/home/css/scrolling-nav.css') !!}" rel="stylesheet">
    
    
    <!-- Custom CSS -->
    <link href="{!! url('public/home/vendor/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! url('public/home/vendor/magnific-popup/magnific-popup.css') !!}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant|Fugaz+One|Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link href="{!! url('public/home/css/creative.css') !!}" rel="stylesheet">
	
	<!-- Theme CSS -->
    <link href="{!! url('public/home/css/agency.css') !!}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

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

	<!--Advertise-->
    @include('home.blocks.advs')
    <!-- About Section -->
    @yield('content')

    <!--Map-->
    <div class="container-fluid">
    <div class="col-md-10 col-md-offset-1" style="height: 500px;">
        <div class="row">
            <iframe src="https://www.google.com/maps/d/embed?mid=14Lqg-tTETf_aV3hH5PacaGFo-GQ" style="height: 450px; width: 100%; "></iframe>
        </div>
    </div>
    </div>

    <!-- Footer-->
    @include('home.blocks.footer')
    
    <!-- jQuery -->
    <script src="{!! url('public/home/js/jquery.js') !!}"></script>
    <script src="{!! url('public/home/vendor/jquery/jquery.min.js') !!}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{!! url('public/home/js/bootstrap.min.js') !!}"></script>
    
	<!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
	
	
    <!-- Scrolling Nav JavaScript -->
    <script src="{!! url('public/home/js/jquery.easing.min.js') !!}"></script>
    <script src="{!! url('public/home/js/scrolling-nav.js') !!}"></script>
   


</body>

</html>
