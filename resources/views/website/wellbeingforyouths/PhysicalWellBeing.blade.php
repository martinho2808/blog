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
		<div class="container">
			<div class="row row-bottom-padded-md">
				<div class="col-md-15 text-center animate-box">
					<center><p><img src="{{URL::asset('image/physical_1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p></center>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3>Physical well-being among Youths</h3>
					<p>It is fundamental for their overall health, growth, and development. Encouraging healthy habits from an early age can significantly impact their well-being throughout their lives.</p>
				</div>
			</div>
			
			<div class="col-md-8 col-md-offset-2 heading-section animate-box">
				<u><center><h3>Components of Physical Well-being</h3></center></u>
				<p>1. Nutrition</p>
				<p>A balanced diet rich in nutrients is essential for growth and development. Encouraging healthy eating habits, including fruits, vegetables, whole grains, lean proteins, and adequate hydration, is crucial.</p>
				<p>2. Physical Activity</p>
				<p>Regular exercise and physical activity are vital for maintaining a healthy weight, strengthening muscles and bones, improving cardiovascular health, and reducing the risk of chronic diseases. Encouraging at least 60 minutes of moderate to vigorous activity daily is recommended.</p>
				<p>3. Sleep</p>
				<p>Sufficient and quality sleep is crucial for physical and mental well-being among youths. Establishing consistent sleep patterns and ensuring adequate rest (typically 8-10 hours per night) is essential for growth and overall health.</p>
				<p>4. Hygiene</p>
				<p>Teaching proper hygiene practices, including regular handwashing, oral hygiene, and personal grooming, helps prevent the spread of illnesses and promotes overall health..</p>				

				
		</div>
@stop