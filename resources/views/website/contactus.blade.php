@extends('layouts.default')

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
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(image/contact_bg.jpg);">
				<div class="desc animate-box">
					<h2><strong>Contact</strong> Us</h2>
					<span><a class="btn btn-primary btn-lg" href="#donate">Donate Now</a></span>
				</div>
			</div>
		</div>
		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form method="POST" action="{{ route('contect_request') }}">
				@csrf
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-phone2"></i>1234 5678</li>
								<li><i class="icon-mail"></i>info@empowerlink.com.hk</li>
								<li><i class="icon-location-pin"></i>Room 2023, 20/F, Youth Training Centre, Kowloon, Hong Kong</li>
								<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236201.4252635897!2d114.01897904422498!3d22.32917604242791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403f8acef094f63%3A0xdf79234740ef02c4!2z5Lmd6b6N!5e0!3m2!1szh-TW!2shk!4v1700059146456!5m2!1szh-TW!2shk" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
							</ul>
						</div>
						<p>Any Inquiries or ideas? We're Here to Help!</p>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="contect_name">
										<span style="color:red">@error('contect_name'){{$message}}@enderror</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="contect_email">
										<span style="color:red">@error('contect_email'){{$message}}@enderror</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
										<span style="color:red">@error('message'){{$message}}@enderror</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->
		
		<div class="container" id="donate">
			<div class="row">
				<div class="col-md-6">
					<h3 class="section-title">Charitable Donation</h3>
						<p>For donations of HKD $500 above, we will provide a recipet for tax deduction purposes.<br/> Please provide your name and mailing address. The receipt regarding the donation will be sent within 4 weeks after the donation.</p>
						<p>Checks mailed to<br/>Room 2023, 20/F, Youth Training Centre, Kowloon, Hong Kong</P>
						<p>Check payable to<br/>EMPOWERLINK TRAINING SOLUTIONS<br/>FPS<br/>1001001<br/>Bank Transfer<br/>Bank of Hong Kong 999-123123123</p>
				</div>
			</div>
		</div>
@stop