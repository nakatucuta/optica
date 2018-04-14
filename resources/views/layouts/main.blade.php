<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Discografica</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/css/app.css">
	    

    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>

		<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/one.style.css')}}">

	<!-- CSS Footer -->
	<link rel="stylesheet" href="{{url('assets/css/footers/footer-v7.css')}}">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{url('assets/plugins/animate.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/line-icons/line-icons.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/pace/pace-flash.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/revolution-slider/rs-plugin/css/settings.css')}}" type="text/css" media="screen">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

	<!-- Style Switcher -->
	<link rel="stylesheet" href="{{url('assets/css/plugins/style-switcher.css')}}">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{url('assets/css/theme-colors/default.css')}}" id="style_color">
	<link rel="stylesheet" href="{{url('assets/css/theme-skins/one.dark.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{url('assets/css/custom.css')}}">

	 <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

	 <script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


</head>

<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">


	<!--=== Header ===-->
	<nav class="one-page-header navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="menu-container page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="#intro">
					<span></span>
					<img src="{{url('assets/img/logos.png')}}" alt="Logo"> 
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<div class="menu-container">
					<ul class="nav navbar-nav">
						<li class="page-scroll home">
							<a href="{{ route('home')}}">INICIO</a>
						</li>
						

						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Cancion
							</a>
							<ul class="dropdown-menu">								
								<li class="page-scroll"><a href="{{ route('song.index')}}">Lista de Canciones</a></li>
								<li class="page-scroll"><a href="{{ route('song.create')}}">Crear Cancion</a></li>
								
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Album
							</a>
							<ul class="dropdown-menu">
							
								<li class="page-scroll"><a href="{{ route('album.index')}}">Lista de Album</a></li>
								<li class="page-scroll"><a href="{{ route('album.create')}}">Crear Album</a></li>
								
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Autor
							</a>
							<ul class="dropdown-menu">
								
								<li class="page-scroll"><a href="{{ route('author.index')}}">Lista de Autor</a></li>
								<li class="page-scroll"><a href="{{ route('author.create')}}">Crear Autor</a></li>
								
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Configuracion
							</a>
							<ul class="dropdown-menu">
								<li class="page-scroll"><a>Medio</a></li>
								<li class="page-scroll"><a href="{{ route('medium.index')}}">  Lista de Medio</a></li>
								<li class="page-scroll"><a href="{{ route('medium.create')}}">  Crear Medio</a></li>
								<li class="divider">
								</li>

								<li class="page-scroll"><a>Genero</a></li>

								<li class="page-scroll"><a href="{{ route('genre.index')}}">  Lista de Genero</a></li>
								<li class="page-scroll"><a href="{{ route('genre.create')}}">  Crear Genero</a></li>
								
							</ul>
						</li>

					</ul>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!--=== End Header ===-->

	
 <div class="col-md-12">
            @yield('content')
          </div>
						



	<!-- JS Global Compulsory -->
	<script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{url('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- JS Implementing Plugins -->
	<script src="{{url('assets/plugins/smoothScroll.js')}}"></script>
	<script src="{{url('assets/plugins/jquery.easing.min.js')}}"></script>
	<script src="{{url('assets/plugins/pace/pace.min.js')}}"></script>
	<script src="{{url('assets/plugins/jquery.parallax.js')}}"></script>
	<script src="{{url('assets/plugins/counter/waypoints.min.js')}}"></script>
	<script src="{{url('assets/plugins/counter/jquery.counterup.min.js')}}"></script>
	<script src="assets/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="{{url('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')}}"></script>
	<script src="{{url('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
	<script src="{{url('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{url('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{url('assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
	<!-- JS Page Level-->
	<script src="{{url('assets/js/one.app.js')}}"></script>
	<script src="{{url('assets/js/forms/login.js')}}"></script>
	<script src="{{url('assets/js/forms/contact.js')}}"></script>
	<script src="{{url('assets/js/plugins/pace-loader.js')}}"></script>
	<script src="{{url('assets/js/plugins/owl-carousel.js')}}"></script>
	<script src="{{url('assets/js/plugins/style-switcher.js')}}"></script>
	<script src="{{url('assets/js/plugins/revolution-slider.js')}}"></script>
	<script src="{{url('assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js')}}"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			App.initCounter();
			App.initParallaxBg();
			LoginForm.initLoginForm();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			RevolutionSlider.initRSfullScreen();
		});
	</script>
	<!--[if lt IE 9]>
		<script src="assets/plugins/respond.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
		<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
		<![endif]-->

	<!--[if lt IE 10]>
		<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
		<![endif]-->
		@include('layouts.search.jssearch')
   
    <script>

    $(document).ready(function(){
    $('#myTable').DataTable();
    });

    </script>

	</body>
	</html>
