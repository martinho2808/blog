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
		<div id="fh5co-content-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Mental Health of Youth</h3>
						<p>Critical issue that encompasses various challenges and concerns affecting individuals typically between the ages of 12 to 25. It's important to recognize and address these challenges due to their potential impact on a young person's well-being, development, and future.</p>
					</div>
				
				
					<div class="row row-bottom-padded-md">
						<div class="col-md-4 text-center animate-box">
							<p><img src="{{URL::asset('image/mental_1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						</div>
						<div class="col-md-4 text-center animate-box">
							<p><img src="{{URL::asset('image/mental_3.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						</div>
						<div class="col-md-4 text-center animate-box">
							<p><img src="{{URL::asset('image/mental_2.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
						</div>
					</div>
				
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Common Mental Health Callenges Among Youths</h3>
					</div>
				
					<div class="col-md-8 col-md-offset-2 heading-section animate-box">
					<h3>1. Anxiety Disorders</h3>
					<p>Characterized by excessive worry, fear, or apprehension, impacting daily life and decision-making.</p>
					<h3>2. Depression</h3>
					<p>Persistent feelings of sadness, hopelessness, and loss of interest in activities, which can affect behavior and emotions.</p>
					<h3>3. Eating Disorders</h3>
					<p>Conditions like anorexia nervosa, bulimia nervosa, or binge-eating disorder that affect eating behaviors, body image, and physical health.</p>
					<h3>4. Substance Abuse</h3>
					<p>Misuse or addiction to substances like drugs or alcohol, often linked to underlying mental health issues.</p>
					<h3>5. Attention-Deficit/Hyperactivity Disorder (ADHD)</h3>
					<p>Difficulty concentrating, impulsivity, and hyperactivity affecting school, work, and relationships.</p>
				</div>
			</div>
		</div>		
@stop