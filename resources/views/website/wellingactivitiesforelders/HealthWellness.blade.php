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
		<div id="fh5co-feature-product">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h3>Holistic Care for Well-being</h3>
						<p>Maintaining the health and wellness of elders requires a comprehensive approach that addresses their physical, mental, emotional, and social needs.<br/>By providing proper healthcare, creating supportive environments, and fostering connections, we can help older adults lead fulfilling and healthy lives as they age.</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-12 text-center animate-box">
						<p><img src="{{URL::asset('image/elder_health_1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/elder_health_2.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/elder_health_3.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Environmental and Lifestyle Factors</h3>
							<p>Safe Living Conditions: Ensuring a safe home environment to prevent falls or accidents. Modifications like handrails, adequate lighting, and removing hazards are crucial.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Medication Management</h3>
							<p>Providing assistance with medication adherence and organizing medications to avoid errors.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Sleep Quality</h3>
							<p>Promoting good sleep hygiene and addressing sleep-related issues that commonly affect older adults.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>
@stop