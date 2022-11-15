@extends('layout.layout')
@section('container')

		<!--page-title starts-->
		<div class="page-title-area">
			<div class="container">
				<div class="row height-200 align-items-center">
					<div class="col-lg-12">
						<div class="page-title section-title text-center">
							<h1><span>Pricing Plan</span></h1>
							<div class="site-breadcrumb">
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pricing Plan</li>
								  </ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--page-title ends-->
		
		<!--pricing-area starts-->
		<div class="pricing-area pt-95 pt-sm-77 pb-100 pb-sm-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="pricing-nav text-center">
							<ul class="nav nav-tabs align-items-center">
								<li><a class="active" data-toggle="tab" href="#monthly">Monthly</a></li>
								<li><a data-toggle="tab" href="#yearly">Yearly</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-content mt-35">
					<div id="monthly" class="tab-pane fade in show active">
						<div class="row pricing-carousel">
							<div class="col-lg-4">
								<div class="pricing-table-single wow fadeIn" data-wow-delay=".3s">
									<div class="pricing-table-head">
										<h3>Started</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>199<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single highlight wow fadeIn" data-wow-delay=".4s">
									<div class="pricing-table-head">
										<h3>Professional</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>259<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single wow fadeIn" data-wow-delay=".5s">
									<div class="pricing-table-head">
										<h3>Enterprise</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>399<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="yearly" class="tab-pane fade">
						<div class="row pricing-carousel">
							<div class="col-lg-4">
								<div class="pricing-table-single">
									<div class="pricing-table-head">
										<h3>Started</h3>
										<p>$350 with 20% Special Discount</p>
										<h4><sup>$</sup>399<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single highlight">
									<div class="pricing-table-head">
										<h3>Professional</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>459<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single">
									<div class="pricing-table-head">
										<h3>Enterprise</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>599<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--pricing-area ends-->
		
		<!--pricing-area starts-->
		<div class="pricing-area bg-f3f8f8 pt-95 pt-sm-77 pb-100 pb-sm-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="pricing-nav text-center">
							<ul class="nav nav-tabs align-items-center">
								<li><a class="active" data-toggle="tab" href="#monthly2">Monthly</a></li>
								<li><a data-toggle="tab" href="#yearly2">Yearly</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-content mt-35">
					<div id="monthly2" class="tab-pane fade in show active">
						<div class="row pricing-carousel">
							<div class="col-lg-4">
								<div class="pricing-table-single wow fadeIn" data-wow-delay=".3s">
									<div class="pricing-table-head">
										<h3>Started</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>199<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single highlight-2 wow fadeIn" data-wow-delay=".4s">
									<div class="pricing-table-head">
										<h3>Professional</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>259<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single wow fadeIn" data-wow-delay=".5s">
									<div class="pricing-table-head">
										<h3>Enterprise</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>399<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="yearly2" class="tab-pane fade">
						<div class="row pricing-carousel">
							<div class="col-lg-4">
								<div class="pricing-table-single">
									<div class="pricing-table-head">
										<h3>Started</h3>
										<p>$350 with 20% Special Discount</p>
										<h4><sup>$</sup>399<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single highlight-2">
									<div class="pricing-table-head">
										<h3>Professional</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>459<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="pricing-table-single">
									<div class="pricing-table-head">
										<h3>Enterprise</h3>
										<p>$250 with 20% Special Discount</p>
										<h4><sup>$</sup>599<span>/per month</span></h4>
									</div>
									<div class="pricing-table-body">
										<ul class="list-sign">
											<li>Up to 30 Keywords</li>
											<li>Up to 10 Web Pages</li>
											<li>Quarterly Ranking Report</li>
											<li>Bi-Yearly Link Outreach Campaign</li>
											<li>24/7 Support</li>
										</ul>
										<a href="#" class="btn-common">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--pricing-area ends-->
		
		<!--call-to-action start-->
		<div class="cta-area mt-sm-80 mb-sm-80">
			<div class="container">
				<div class="row height-470 align-items-center">
					<div class="col-lg-6 col-md-6 text-center">
						<div class="wow rollIn" data-wow-delay=".3s">
							<img src="{{asset('front_assets/images/cta/1.png')}}" alt="" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="section-title">
							<div class="wow fadeInUp" data-wow-delay=".3s">
								<h2><span>We’re Hiring!</span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-delay=".4s">
								<p class="mt-20">We are always looking to hire the right talent to <br/> help us grow</p>
							</div>
							<div class="wow fadeInUp" data-wow-delay=".5s">
								<a href="#" class="btn-common btn-pink radius-50 mt-35">Apply Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--call-to-action end-->
		
		<!--brands starts-->
		<div class="brands-area bg-f3f8f8">
			<div class="container">
				<div class="row height-160 align-items-center">
					<div class="col-lg-12">
						<div class="brands-carousel">
							<div class="brand-item">
								<a href="#">
									<img class="brand-static" src="{{asset('front_assets/images/brands/1.png')}}" alt="" />
									<img class="brand-dynamic" src="{{asset('front_assets/images/brands/1-hover.png')}}" alt="" />
								</a>
							</div>
							<div class="brand-item">
								<a href="#">
									<img class="brand-static" src="{{asset('front_assets/images/brands/2.png')}}" alt="" />
									<img class="brand-dynamic" src="{{asset('front_assets/images/brands/2-hover.png')}}" alt="" />
								</a>
							</div>
							<div class="brand-item">
								<a href="#">
									<img class="brand-static" src="{{asset('front_assets/images/brands/3.png')}}" alt="" />
									<img class="brand-dynamic" src="{{asset('front_assets/images/brands/3-hover.png')}}" alt="" />
								</a>
							</div>
							<div class="brand-item">
								<a href="#">
									<img class="brand-static" src="{{asset('front_assets/images/brands/4.png')}}" alt="" />
									<img class="brand-dynamic" src="{{asset('front_assets/images/brands/4-hover.png')}}" alt="" />
								</a>
							</div>
							<div class="brand-item">
								<a href="#">
									<img class="brand-static" src="{{asset('front_assets/images/brands/5.png')}}" alt="" />
									<img class="brand-dynamic" src="{{asset('front_assets/images/brands/5-hover.png')}}" alt="" />
								</a>
							</div>
							<div class="brand-item">
								<a href="#">
									<img class="brand-static" src="{{asset('front_assets/images/brands/1.png')}}" alt="" />
									<img class="brand-dynamic" src="{{asset('front_assets/images/brands/1-hover.png')}}" alt="" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--brands ends-->
		
@endsection