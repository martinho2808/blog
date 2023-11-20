@extends('layout.default')

@section('styles')
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')
<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('image/cover_bg.jpg')}});">
				<div class="desc animate-box">
					<h2><strong>Professional</strong> training <strong>course</strong></h2>
					<span>For youth and elderly </span>
					
				</div>
			</div>

		</div>
		
<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-happy"></i>
							</span>
							<div class="feature-copy">
								<h3>Become a volunteer</h3>
								<p>Building stronger communities by volunteer activities</p>
								<p><a href="{{ route('YouthServices.Volunteeractivities') }}">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>Careers development</h3>
								<p>Equipping youth for career excellence by developing different skills</p>
								<p><a href="{{ route('NewServicesCourses.CraftingCareers') }}">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-desktop"></i>
							</span>
							<div class="feature-copy">
								<h3>Digital Empowerment</h3>
								<p>Empowering seniors with essential computer and IT skills to adapt to the new generation</p>
								<p><a href="{{ route('NewServicesCourses.DigitalEmpowerment') }}">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-feature-product" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Ignite Success</h3>
						<p>Empower Your Journey, Achieve Excellence.</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="{{URL::asset('image/cover_bg_1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/cover_bg_2.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/cover_bg_3.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Love</h3>
							<p>preading Compassion, Kindness, and Hope to Those in Need.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Compassion</h3>
							<p> Extending a Helping Hand, Nurturing Hearts, and Igniting Hope in Every Act of Giving.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Charity</h3>
							<p>Transforming Lives, Building Communities, and Creating a Brighter Future for All.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>

		
		<div id="fh5co-portfolio">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
						<h3>Our Gallery</h3>
						<p>Empowering Change, Unleashing the Power of Social Impact</p>
					</div>
				</div>

				
				<div class="row row-bottom-padded-md">
					<div class="col-md-12">
						<ul id="fh5co-portfolio-list">

							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery1.jpeg')}}); ">
									<div class="case-studies-summary">
									</div>
							</li>
						
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery2.jpeg')}}); ">
									<div class="case-studies-summary">
									</div>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery3.jpeg')}}); "> 
									<div class="case-studies-summary">
									</div>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery4.jpeg')}}); ">
									<div class="case-studies-summary">
									</div>
							</li>
						</ul>		
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="{{ route('Gallery') }}" class="btn btn-primary btn-lg">See Gallery</a>
					</div>
				</div>
			</div>
		</div>
	
		<!-- fh5co-content-section -->

@stop