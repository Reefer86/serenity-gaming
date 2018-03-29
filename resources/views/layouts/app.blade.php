<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chocolat.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
</head>
<body>
	<div id="preloader"></div>
    <!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="index.html"><center><img src="images/serenity-header.png" class="img img-responsive" /></center></a></h1>
			</div>
			<div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
										<li class="active"><a href="/">Home</a></li>
										<li><a href="#about" class="scroll">About</a></li>
										<li><a href="#markets" class="scroll">Links</a></li>
										<li><a href="#gallery" class="scroll">Games</a></li>
										<li><a href="#testimonial" class="scroll">Admin Team</a></li>
										<!-- <li><a href="#team" class="scroll">Team</a></li>
										<li><a href="#blog" class="scroll">Blog</a></li>
										<li><a href="#mail" class="scroll">Mail Us</a></li> -->
									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h3>Discord</h3>
												<p>Join the best upcoming community on discord!</p>
												<div class="w3-button">
													<a href="https://discord.gg/57RQYEN" target="_blank">Join!</a>
													<!--<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>-->
												</div>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>Twitch</h3>
												<p>Follow us on twitch for awesome content!</p>
												<div class="w3-button">
													<a href="https://www.twitch.tv/serenitygameeu" target="_blank">Follow!</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- //banner -->
    
    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/controls.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/jarallax.js') }}"></script>
    <script src="{{ asset('js/jquery.chocolat.js') }}"></script>
    <script src="{{ asset('js/jquery.filterizr.js') }}"></script>
    <script src="{{ asset('js/move-top.js') }}"></script>
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
				setTimeout(function(){
					$('#preloader').slideUp();
				}, 200);

            $(".scroll").click(function(event){		
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
            auto: true,
            pager:true,
            nav:true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
            });

        });
    </script>
</body>
</html>
