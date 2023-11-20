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
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(image/youth1.jpeg);">
				<div class="desc animate-box">
					<h2><strong>Youth</strong> Service</h2>
					<span>Empowering Youth, Shaping Futures: Unlocking Potential, Inspiring Change.</span>
				</div>
			</div>
		</div>
		
		
		
		<div id="fh5co-feature-product">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>Youth Empowerment Specialist</h3>
						<p>Become a Youth Empowerment Specialist and Make a Lasting Impact on Young Lives</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/youth2.jpeg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/youth3.jpeg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Empowering Youth</h3>
							<p>Help young individuals discover their strengths, overcome challenges, and become confident, resilient individuals ready to navigate the world.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Making a Difference</h3>
							<p> Impact the lives of young people by providing guidance, support, and resources that contribute to their personal growth, well-being, and future success.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Advocacy and Social Change</h3>
							<p>Serve as a voice for youth, advocating for their needs and rights, and working towards creating a more inclusive and equitable society for all young individuals.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>
@stop