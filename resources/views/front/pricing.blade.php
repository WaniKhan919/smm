@extends('layout.layout')
@section('container')

@php

	use App\Models\User;
	use Auth as Authentication;

@endphp

{{-- Login Modal --}}
	<div class="modal fade" id="pricing-login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content p-4">
				<button type="button" class="close x" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-header border-0 mb-2">
					<h5 class="modal-title text-dark" id="exampleModalLabel">Log in</h5>
					<button type="button" class="close" aria-label="Close" disabled='true'>
						<a href="{{ url('/register') }}"><span aria-hidden="true" id="pricing-login-modal-signup-button">Signup</span></a>
					</button>
				</div>
				<div class="modal-body">
					<form id="pricing-modal-login-form">
						<div class="form-group pricing-login-form-item">
							<input type="text" id="email" class="form-control p-0"
								style="box-shadow: none;border-radius:0px">
							<label class="form-control-placeholder p-0" for="name">Email</label>
							<span class="text-danger text-center"></span>
						</div>
						<div class="form-group pricing-login-form-item">
							<input type="text" id="password" class="form-control p-0"
								style="box-shadow: none;border-radius:0px">
							<label class="form-control-placeholder p-0" for="password">Password</label>
						</div>
				</div>
				<div class="modal-footer border-0 mb-4">
					<button type="submit" id="pricing-login-modal" class="btn signup col-6 col-md-6 checkout-login-centered">Login</button>
				</div>
			
			</form>

				<button id="checkout-guest-button" class="checkout-login-centered">Checkout as a guest!</button>
			</div>
		</div>
	</div>
{{--  --}}

@if (isset($service) && !isset($service_packages))
<div class="bg-banner mb-5">
	<div class="row">
		<div class="col-lg-6">
			<h4 class="pt-5 pl-5">If you've released the app, <br> get it on the app market faster! </h4>
			<p class="pt-5 pl-5">We can make your app rank Top 1~5 position of any keywords within 25days. We provide the best
				price for guaranteed app ranking service! Please contact us by filling out the form below 😊 </p>
		</div>
		<div class="col-lg-6 ">
			<div id="carouselExampleSlidesOnly" class="carousel slide pr-3" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="/front_assets/images/banner/rating.png" style="height: 483px" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/front_assets/images/banner/rating.png" style="height: 483px" alt="Second slide">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row align-items-stretch">
		<div class="col-lg-6">
			<h4 class="contact-h text-center mb-2">Contact with us</h4>
			@if (session()->has('alert'))
				<h4 class="text-center text-success mb-4">{{ session('alert') }}</h4>
			@endif
			<form method="POST" action="{{ route('user.contact.form') }}" required class="contact-form-h">
				@csrf
				<div class="form-group">
					<input type="email" name="email" class="form-control" required placeholder="Your email address">
				</div>
				<div class="form-group">
					<input type="text" name="link" class="form-control" required placeholder="Your app link">
				</div>
				<div class="form-group">
					<input type="text" name="country" class="form-control" required placeholder="Your targeted country">
				</div>
				<div class="form-group">
					<input type="text" name="keyword" class="form-control" required placeholder="Your targeted keyword">
				</div>
				<div class="form-group">
					<textarea name="message" id="" class="form-control" cols="20" rows="6" required placeholder="Message"></textarea>
				</div>
				<button class="start-btn-foo wow fadeInRight border-0" type="submit">Submit to Get Plan </button>
			</form>
		</div>
		<div class="col-lg-6">
			<div class="bg-banner h-100">
				<div class="pt-5">
					<h4 class="pl-3 pt-5 text-white">Guaranteed Keyword <br> Ranking (Top 1-5) Services</h4>
					<ul class="list-group pl-3 pt-1 text-white">
						<li class="list-group-item border-0 bg-transparent text-white">For iOS and Android apps </li>
						<li class="list-group-item border-0 bg-transparent text-white">Price starts at $500 </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix m-5"></div>
<div class="container-fluid section_how_to_buy">
	<div class="container">
		<h3 class="title-big__all text-uppercase text-center mb-3">How to buy Guaranteed App Ranking Service?</h3>
		<div class="row row-md-nowrap">
			<div class="col-8 col-sm-5 col-md-5 col-lg-4 mb-25 wow fadeInUp" data-wow-delay="0s"
				style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
				<div class="item-to-buy d-flex align-items-center"> <span class="icon d-flex"> <img
							src="{{ asset('/front_assets/images/icon1.gif') }}" style="border-radius: 50%;" title="ENTER YOUR INFO" alt="ENTER YOUR INFO"
							class="img-fluid smooth"> </span>
					<div class="text-box">
						<p class="title-small__all f-bold cl-green mb-10 text-uppercase">SUBMIT YOUR REQUEST</p>
						<div class="desc"> Please fill out the form and note what you want </div>
					</div>
				</div>
			</div>
			<div class="col-8 col-sm-5 col-md-5 col-lg-4 mb-25 wow fadeInUp" data-wow-delay="0.1s"
				style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
				<div class="item-to-buy d-flex align-items-center"> <span class="icon d-flex"> <img
							src="{{ asset('/front_assets/images/icon2.gif') }}" style="border-radius: 50%;"  title="SEND YOUR INFO" alt="SEND YOUR INFO"
							class="img-fluid smooth"> </span>
					<div class="text-box">
						<p class="title-small__all f-bold cl-green mb-10 text-uppercase">WE WILL CONTACT YOU IN 24H</p>
						<div class="desc"> We will contact you in 24h with pricing and details for app ranking service process.
						</div>
					</div>
				</div>
			</div>
			<div class="col-8 col-sm-5 col-md-5 col-lg-4 mb-25 wow fadeInUp" data-wow-delay="0.2s"
				style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
				<div class="item-to-buy d-flex align-items-center"> <span class="icon d-flex" style="position: relative;
					top: -34px;"> <img
							src="{{ asset('/front_assets/images/icon3.gif') }}" style="border-radius: 50%;"  title="WE WILL CONTACT YOU"
							alt="WE WILL CONTACT YOU" class="img-fluid smooth"> </span>
					<div class="text-box">
						<p class="title-small__all f-bold cl-green mb-10 text-uppercase">PAY & START RANKING!</p>
						<div class="desc">We will send custom online payment by stripe (support VISA,Master Cards). Easy to complete
							payment and just wait 20~30days! Your app will be ranked Top 1~5. </div>
					</div>
				</div>
			</div>
		</div>
		<div class="container get-top">
			<div class="row align-items-center">
				<div class="col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
					<h3 class="title-big__all f-bold cl-title text-uppercase position-relative">Get Your App in No.1 Position by
						any Keyword !</h3>
				</div>
				<div class="col-lg-8 mt-3 mt-lg-0 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
					<div class="s-content">
						<p><span style="font-family: 'times new roman', times, serif; font-size: 20px;">If your app is already
								ranked within 300 rankings for the keyword, you can make your app in No.1 Ranking in super short
								period.</span></p>
						<p><span style="font-family: 'times new roman', times, serif; font-size: 20px;">We can help to boost your
								app by any keywords and in any countries.</span></p>
						<p><span style="font-family: 'times new roman', times, serif; font-size: 20px;">Don’t worry about if not get
								it to your targeted rank, our guaranteed app ranking service is reaching 98% success result! Buy
								guaranteed Keyword Ranking is super easy, All you need to do is send us your request!</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid ranking">
	<div class="row d-flex align-items-center">
		<div class="footer-top__text col-lg-7 mb30 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
			<p class="ml-5 pt-5">Promote your App with Fast Ranking Service
			</p>
			<p class="ml-5">
				Ask for the Cheapest Price! 
			</p>
		</div>
		<div class="col-lg-5 mb30 text-center">
			<div class="popup_foo">
				<a href="{{ route('contact') }}" class="start-btn-foo wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Contact Us</a>
			</div>
		</div>
	</div>
</div>
@else

<!--pricing-area starts-->
<div class="pricing-area pt-95 pt-sm-77 pb-100 pb-sm-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="pricing-nav text-center">
					<ul class="nav nav-tabs align-items-center">
						<li><a class="active" data-toggle="tab" href="#monthly">{{ $pkg_name ?? $service->title ?? '' }}</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5 pricing-container">
			{{-- New Pricing --}}
			@php
				
				if (Route::is("service") && !Authentication::check()){
					$user = User::where('email', 'guest@gmail.com')->first();
					Authentication::login($user);
					session()->flash('stripe_login_override', true);
				}
	
			@endphp
			@foreach ($service_packages as $pakage)
					
				<div class="col-lg-4 column-1">
					<div class="package-card bg-package-card blue-bg package-blue">
					{{-- <div class="pakage-header-div">
						<span class="price" style="font-size: 18px;">{{ ucfirst($pakage->level_name) }}</span>
						@php
							$price='';
							if($pakage->sale_price!=''){
								$price=(($pakage->price - $pakage->sale_price)/$pakage->price)*100;
							}
							@endphp
						<span class="price-tag" style="font-size: 18px; text-decoration: none;">@if($price!='')<del style="text-decoration: none;">{{ round($price,0) }}%</del> @else ${{ $pakage->price }} @endif @if($price!='') off <del style="text-decoration: line-through;">${{ $pakage->price }} </del> @endif</span>
					</div>
					<div class="pakage-header-div">
						<span class="price" style="font-size: 18px;">{{ ucfirst($pakage->title) }}</span>
						<span class="discount-price" style="font-size: 18px;">@if($price!='')${{ $pakage->sale_price }} @endif</span>
					</div> --}}

					{{-- New changes --}}
					<div class="row py-4 price-card-header-1 change-bg-no rounded-top">

						<div class="col-12 text-white row d-flex justify-content-center">

							<span class="mb-4" style="font-size: 29px; text-align: center; padding-left: 23px;">{{ ucfirst($pakage->title) }}</span>

						</div>
						<div class="col-12 row text-white">

							<div class="col-6 package-status">
								
								{{ ucfirst($pakage->level_name) }}

							</div>
							<div class="col-6 text-end package-price">

								@if (isset($pakage->sale_price))
									
									${{ $pakage->sale_price }}

								@else
									
									${{ $pakage->price }}

								@endif

							</div>

						</div>
						
					</div>

					<ul>
						@if ($pakage->features != "")
							@foreach (json_decode($pakage->features) as $feature)
							<li>{{ $feature }}</li>
							@endforeach
						@endif
					</ul>
					<form action="{{ route('buy_package') }}" method="post">
						@csrf
							<input type="hidden" name="service_id" value="{{ $pakage->id }}" required>
							<input type="text" placeholder="Your app URL" name='url' required>
							<input type="email" placeholder="Your email" name='email' required>
							<input type="text" placeholder="Keyword" name='keyword'>
							<input type="number" placeholder="Set the daily speed" name="daily_speed">
							<select class="country_dropdown text-center" name="country" id="">
							<option value="Afghanistan">Afghanistan</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="American Samoa">American Samoa</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antartica">Antarctica</option>
							<option value="Antigua and Barbuda">Antigua and Barbuda</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Belarus">Belarus</option>
							<option value="Belgium">Belgium</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Benin</option>
							<option value="Bermuda">Bermuda</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Bolivia">Bolivia</option>
							<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
							<option value="Botswana">Botswana</option>
							<option value="Bouvet Island">Bouvet Island</option>
							<option value="Brazil">Brazil</option>
							<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
							<option value="Brunei Darussalam">Brunei Darussalam</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodia">Cambodia</option>
							<option value="Cameroon">Cameroon</option>
							<option value="Canada">Canada</option>
							<option value="Cape Verde">Cape Verde</option>
							<option value="Cayman Islands">Cayman Islands</option>
							<option value="Central African Republic">Central African Republic</option>
							<option value="Chad">Chad</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>
							<option value="Christmas Island">Christmas Island</option>
							<option value="Cocos Islands">Cocos (Keeling) Islands</option>
							<option value="Colombia">Colombia</option>
							<option value="Comoros">Comoros</option>
							<option value="Congo">Congo</option>
							<option value="Congo">Congo, the Democratic Republic of the</option>
							<option value="Cook Islands">Cook Islands</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cota D'Ivoire">Cote d'Ivoire</option>
							<option value="Croatia">Croatia (Hrvatska)</option>
							<option value="Cuba">Cuba</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czech Republic">Czech Republic</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="East Timor">East Timor</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
							<option value="Faroe Islands">Faroe Islands</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="France Metropolitan">France, Metropolitan</option>
							<option value="French Guiana">French Guiana</option>
							<option value="French Polynesia">French Polynesia</option>
							<option value="French Southern Territories">French Southern Territories</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Greece">Greece</option>
							<option value="Greenland">Greenland</option>
							<option value="Grenada">Grenada</option>
							<option value="Guadeloupe">Guadeloupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinea">Guinea</option>
							<option value="Guinea-Bissau">Guinea-Bissau</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
							<option value="Holy See">Holy See (Vatican City State)</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Iran">Iran (Islamic Republic of)</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
							<option value="Korea">Korea, Republic of</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Lao">Lao People's Democratic Republic</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macau">Macau</option>
							<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malawi">Malawi</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico">Mexico</option>
							<option value="Micronesia">Micronesia, Federated States of</option>
							<option value="Moldova">Moldova, Republic of</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherlands">Netherlands</option>
							<option value="Netherlands Antilles">Netherlands Antilles</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Northern Mariana Islands">Northern Mariana Islands</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau">Palau</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Philippines">Philippines</option>
							<option value="Pitcairn">Pitcairn</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Puerto Rico">Puerto Rico</option>
							<option value="Qatar">Qatar</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania">Romania</option>
							<option value="Russia">Russian Federation</option>
							<option value="Rwanda">Rwanda</option>
							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
							<option value="Saint LUCIA">Saint LUCIA</option>
							<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome and Principe">Sao Tome and Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Slovakia">Slovakia (Slovak Republic)</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
							<option value="Span">Spain</option>
							<option value="SriLanka">Sri Lanka</option>
							<option value="St. Helena">St. Helena</option>
							<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syria">Syrian Arab Republic</option>
							<option value="Taiwan">Taiwan, Province of China</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania">Tanzania, United Republic of</option>
							<option value="Thailand">Thailand</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad and Tobago">Trinidad and Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks and Caicos">Turks and Caicos Islands</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Uganda">Uganda</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
							<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Vietnam">Viet Nam</option>
							<option value="Virgin Islands (British)">Virgin Islands (British)</option>
							<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
							<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
							<option value="Western Sahara">Western Sahara</option>
							<option value="Yemen">Yemen</option>
							<option value="Serbia">Serbia</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
						  </select>

						@if (!auth()->check() || auth()->user()->email == "guest@gmail.com")
						
						<button type="button" id="pakage-submit-button" class="btn btn-border ios-border pricing-guest-login" data-toggle="modal" data-target="#pricing-login-modal">buy now</button>
						<button type="submit" class="d-none" id="pricing-checkout-toggle"></button>

						@else
						
						<button type="submit" id="pakage-submit-button" class="btn btn-border ios-border">buy now</button>

						@endif
						
					</form>
					</div>
				</div>
			  
			  @endforeach
		</div>
	</div>
</div>
<!--pricing-area ends-->
@endif
@endsection