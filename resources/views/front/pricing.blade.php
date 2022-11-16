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
								<li><a class="active" data-toggle="tab" href="#monthly">Packages</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-content mt-35">
					<div id="monthly" class="tab-pane fade in show active">
						<div class="row pricing-carousel">
							@foreach ($packages as $pakage)
								<div class="col-lg-4">
									<div class="pricing-table-single {{ $loop->index%2!=0 ?'highlight':'' }} wow fadeIn" data-wow-delay=".3s">
										<div class="pricing-table-head">
											<h3>{{ $pakage->title }}</h3>
											@if($pakage->sale_price!='')
											@php
												$sale_price=$pakage->sale_price;
												$price=$pakage->price;
												$discount=100-($sale_price/$price*100)
											@endphp
											<p>${{ $pakage->sale_price }} with {{ number_format($discount,2, '.', '') }}% Special Discount</p>
											<h4><sup>$</sup>{{ $pakage->sale_price }}<span>/per month</span></h4>
											@else
											<p>${{ $pakage->price }}</p>
											<h4><sup>$</sup>{{ $pakage->price }}<span>/per month</span></h4>
											@endif
										</div>
										<div class="pricing-table-body">
											<ul class="list-sign">
												@if($pakage->features!='')
													@foreach (json_decode($pakage->features) as $feature)
														<li>{{ $feature }}</li>
													@endforeach
												@endif
											</ul>
											<a href="#" class="btn-common">Get Started</a>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--pricing-area ends-->

@endsection