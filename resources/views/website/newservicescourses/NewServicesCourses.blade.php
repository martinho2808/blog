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
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(image/newservice.jpeg);">
				<div class="desc animate-box">
					<h2><strong>New</strong> <strong>Service</strong><strong> and</strong><strong> Course</strong></h2>
					<span></span>
				</div>
			</div>
		</div>
		
		
		
		<div id="fh5co-feature-product">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Bridging Generations, Empowering Communities</h3>
						<p>Connecting Youth and Elderly Through Meaningful Courses and Services</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/newservice2.jpeg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/newservice3.jpeg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Digital Empowerment</h3>
							<p>Break down generational barriers, foster mutual understanding, and create meaningful connections between youth and the elderly.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Crafting Careers</h3>
							<p>Explore diverse career options, set meaningful goals, and create a solid roadmap for your professional journey.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>English Fluency Bootcamp</h3>
							<p>Unlock the power of language, refine your communication abilities, and express yourself with confidence and clarity.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>
@stop