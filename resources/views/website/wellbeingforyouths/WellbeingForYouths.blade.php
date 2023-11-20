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
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(image/youth_bg_2.jpg);">
				<div class="desc animate-box">
					<h2><strong>Wellness</strong> Youth</h2>
					<span>Nurturing the overall well-being of young individuals for a vibrant future</span>
				</div>
			</div>
		</div>


		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Youth Achievements</h3>
						<p>Encompass a wide range of accomplishments and successes attained by young individuals in various aspects of their lives. These achievements can be personal, academic, athletic, artistic, or community-oriented, showcasing the diverse talents, skills, and dedication of young people.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="image/youth_icon_1.jpg" alt="user">
							</figure>

							<div>
								<h3>Sophia Lee</h3>
								<p><span>Talented Musician</span></p>
								<p>Has achieved recognition for her exceptional piano skills. She has won multiple regional music competitions and has been invited to perform at prestigious concert halls. Her dedication to her craft and her ability to captivate audiences with her musical talent are remarkable achievements for a young musician.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="image/youth_icon_3.jpg" alt="user">
							</figure>
							<div>
								<h3>Emma Li</h3>
								<p><span>Passionate Environmental Activist</span></p>
								<p>Has made significant achievements in her advocacy work. She initiated a local campaign to reduce plastic waste in her community, leading to the successful implementation of plastic recycling programs in schools and businesses. Emma's commitment to sustainability and her ability to mobilize others for positive change are commendable achievements for a young environmentalist.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="image/youth_icon_2.jpg" alt="user">
							</figure>
							<div>
								<h3>Liam Chan</h3>
								<p><span>Dedicated Student-athlete</span></p>
								<p>Has achieved remarkable success in the field of track and field. He holds several school records in sprinting events and has consistently performed at a high level in regional and state-level competitions. Liam's commitment to training, discipline, and his ability to excel in his athletics pursuits are impressive achievements for a young athlete.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop