<!doctype html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Google App review sales </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="manifest" href="site.webmanifest">
		<link rel="apple-touch-icon" href="icon.png">
		<!-- Place favicon.ico in the root directory -->

		<!-- bootstrap v4.0.0 -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css')}}">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/font-awesome.min.css')}}">
		<!-- themify-icons css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/themify-icons.css')}}">
		<!-- elegant css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/elegant.css')}}">
		<!-- animate css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/animate.css')}}">
		<!-- jquery.mmenu css -->
		<link rel="stylesheet" href="{{ asset('front_assets/mmenu/mmenu.css')}}" />
		<!-- slick css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/slick.css')}}">
		<!-- slick-theme css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/slick-theme.css')}}">
		<!-- venobox css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/venobox.css')}}">
		<!-- helper css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/helper.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('front_assets/style.css')}}">
		<link rel="stylesheet" href="{{ asset('front_assets/custom.css')}}">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{ asset('front_assets/css/responsive.css')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css"/> -->
		{{-- Services-Pricing --}}
		<link rel="stylesheet" href="{{ asset('front_assets/services_pricing/custom.css') }}">
		{{--  --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
		{{-- Google Fonts --}}
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500&display=swap" rel="stylesheet">

		<script type="text/javascript">
			var lang = '{{ $userLangCode }}';
			var selectedLanguage = '{{ isset($_COOKIE['googtrans']) && !empty($_COOKIE['googtrans'])? $_COOKIE['googtrans']: '' }}';

			function setCookie(key, value, expiry) {
				var expires = new Date();
				expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
				document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
			}
			
			if (selectedLanguage === '')
				setCookie('googtrans', '/en/' + lang.toLowerCase(), 1);

			function googleTranslateElementInit() {
				new google.translate.TranslateElement({
					pageLanguage: 'en'
				}, 'google_translate_element');
			}
		</script>

		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

		<style>
			body {
				position: static !important;
			}
			.skiptranslate iframe {
				display: none;
			}
			.skiptranslate.goog-te-gadget {
				font-size: 0px !important;
				display: flex;
				align-items: center;
			}

			.skiptranslate.goog-te-gadget > span {
				display: none;
			}

			.skiptranslate.goog-te-gadget > div {
				display: flex;
				align-items: center;
			}

			.goog-te-combo{
				padding: 8px;
				border-color: #fb5c71;
				color: #fb5c71;
				font-weight: bold;
				border: 1px solid;
			}

		</style>
	</head>
	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->
		
		<!--header-starts-->
		<header class="header-area">
			<!--header-top-->
			<div class="header-top-area bb-ebeb">
				<div class="container">
					<div class="row height-50 align-items-center">
						<div class="col-lg-6">
							<div class="top-info">
								<ul class="list-none">
									<li><a href="#"><i class="fa fa-phone"></i>(22) 1234 5678</a></li>
									<li><a href="#"><i class="fa fa-envelope"></i>email@example.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 text-right">
							<div class="header-top-right pull-right">
								@if (Auth::check())
									<a href="{{ route('user-dashboard') }}" class="btn-common">Dashboard</a>
								@else
									<a href="{{ route('login') }}" class="btn-common">Signin / Signup</a>
								@endif
								
								<div class="social-icons ml-2">
									@if (Auth::check())
										<a href="{{ route('user-logout') }}">Logout</a>
									@endif
								</div>
								<div id="google_translate_element" class="site-lang">
									{{-- <ul>
										<li>
											<img src="{{ asset('front_assets/images/flags/uk.jpg')}}" alt="" />
											<a href="#">EN</a>
											<ul>
												<li><img src="{{ asset('front_assets/images/flags/fr.jpg')}}" alt="" /><a href="#">French</a></li>
												<li><img src="{{ asset('front_assets/images/flags/uk.jpg')}}" alt="" /><a href="#">English</a></li>
												<li><img src="{{ asset('front_assets/images/flags/gr.jpg')}}" alt="" /><a href="#">German</a></li>
												<li><img src="{{ asset('front_assets/images/flags/vn.jpg')}}" alt="" /><a href="#">Vietnam</a></li>
											</ul>
										</li>
									</ul> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--header-bottom-->
			<div id="sticker" class="header-bottom">
				<div class="container">
					<div class="row height-100 align-items-center">
						<div class="col-lg-3 col-md-3 col-4">
							<div class="logo">
								<a href="{{ url('/') }}"><img src="http://admksolutions.com/wp-content/uploads/2020/09/ADMK-LOGO.png" style="height: 50px;" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-8">
							<div class="mainmenu pull-right">
								<nav>
									<ul class="list-none">
										
										<x-navbar-services></x-navbar-services>
										<li>
											<a href="javascript:void(0)">About Us</a>
											<ul class="submenu">
												<li>
													<a href="{{ route('about-us') }}">Company</a>
												</li>
												<li>
													<a href="{{ route('faq') }}">FAQ</a>
												</li>
												<x-navbar-blogs></x-navbar-blogs>
											</ul>
										</li>
										<li><a href="{{ route('contact') }}">Contact Us</a></li>
										<li class="mobile-icon"><a href="#mobile-menu"><i class="ti-menu"></i></a></li>
									</ul>
								</nav>
							</div>
							<div class="d-hidden mobile-menu">
								<nav id="mobile-menu">  
									<div id="panel-menu">
										<ul class="list-none">
											<li><a href="{{ url('/') }}">Home</a>
											</li>
											<x-navbar-services></x-navbar-services>
											<li>
												<a href="javascript:void(0)">About Us</a>
												<ul class="submenu">
													<li>
														<a href="{{ route('about-us') }}">Company</a>
													</li>
													<li>
														<a href="{{ route('faq') }}">FAQ</a>
													</li>
													<x-navbar-blogs></x-navbar-blogs>
												</ul>
											</li>
											<li>
												<a href="{{ route('contact') }}">Contact Us</a>
											</li>
										</ul>
									</div>
									<div id="panel-lang">
										<ul>
											<li><a href="#">French</a></li>
											<li><a href="#">English</a></li>
											<li><a href="#">German</a></li>
											<li><a href="#">Vietnam</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--header-ends-->
    @yield('container')
		
		<!--footer starts-->
		<footer class="footer-area">
			<div class="container">
				<div class="row footer-top pt-60 pb-50">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget footer-logo">
							<div class="footer-logo">
								<img src="http://admksolutions.com/wp-content/uploads/2020/09/ADMK-LOGO.png" style="max-height: 60px;" alt="" />
							</div>
							<ul class="list-none">
								<li>Mon - Fri: 9:00 - 19:00</li>
								<li>Closed on Weekends</li>
							</ul>
							<div class="subscribe-form mt-20">
								<div class="subscribe-form-inner">
									<input type="text" placeholder="Email" />
									<button><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
								</div>
								<p>Get the latest updates and offers.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget pl-65">
							<div class="footer-widget-title">
								<h4><span>About Us</span></h4>
							</div>
							<ul class="list-none">
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><a href="{{ route('contact') }}">Contact Us</a></li>
								<li><a href="{{ route('about-us') }}">About Us</a></li>
								<li><a href="{{ route('faq') }}">FAQs</a></li>
							</ul>
						</div>
					</div>
					<x-footer-services></x-footer-services>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget footer-contact mt-sm-35">
							<div class="footer-widget-title">
								<h4><span>Contact Us</span></h4>
							</div>
							<h5>(00) 1234 5678</h5>
							<ul class="list-none">
								<li>email@example.com</li>
								<li>I8 Markaz Islamabad</li>
							</ul>
							<div class="social-icons style-2 mt-25">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row height-60 footer-bottom align-items-center br-top-ebebeb">
					<div class="col-lg-6 col-sm-5">
						<div class="footer-copyright">
							<p>&copy; Copyright <script>document.write(new Date().getFullYear());</script>, Designed By <a href="https://admksolutions.com/" target="_blank">ADMK</a></p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-7">
						<div class="footer-menu pull-right">
							<ul class="list-none">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Terms of use</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--footer ends-->

		<!-- modernizr js -->
		<script src="{{ asset('front_assets/js/modernizr-3.6.0.min.js')}}"></script>
		<!-- jquery-3.3.1 version -->
		<script src="{{ asset('front_assets/js/jquery-3.3.1.min.js')}}"></script>
		<!-- jquery-migrate-3.0.0.min.js version -->
		<script src="{{ asset('front_assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
		<!-- bootstra.min js -->
		<script src="{{ asset('front_assets/js/bootstrap.min.js')}}"></script>
		<!-- mmenu js -->
		<script src="{{ asset('front_assets/js/mmenu.js')}}"></script>
		<script src="{{ asset('front_assets/js/mmenu.debugger.js')}}"></script>
		<!---venobox-js-->
		<script src="{{ asset('front_assets/js/venobox.min.js')}}"></script>
		<!---counterup-js-->
		<script src="{{ asset('front_assets/js/jquery.counterup.min.js')}}"></script>
		<!---waypoints-js-->
		<script src="{{ asset('front_assets/js/waypoints.js')}}"></script>
		<!---slick-js-->
		<script src="{{ asset('front_assets/js/slick.min.js')}}"></script>
		<!-- jquery.countdown js -->
		<script src="{{ asset('front_assets/js/jquery.countdown.min.js')}}"></script>
		<!---isotop-->
		<script src="{{ asset('front_assets/js/isotope.pkgd.min.js')}}"></script>
		<!-- wow js -->
        <script src="{{ asset('front_assets/js/wow.min.js')}}"></script>
		<!-- plugins js -->
		<script src="{{ asset('front_assets/js/plugins.js')}}"></script>
		<!-- main js -->
		<script src="{{ asset('front_assets/js/main.js')}}"></script>
		<!-- Service-Pricing -->
		<script src="{{ asset('front_assets/services_pricing/main.js') }}"></script>

	</body>
</html>
