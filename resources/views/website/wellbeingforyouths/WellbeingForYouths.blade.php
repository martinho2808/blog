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
								<h3>Jean Doe</h3>
								<p><span>Founder</span></p>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="images/person_2.jpg" alt="user">
							</figure>
							<div>
								<h3>John Doe</h3>
								<p><span>Founder</span></p>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-team text-center animate-box">
							<figure>
								<img src="images/person_3.jpg" alt="user">
							</figure>
							<div>
								<h3>John Doe</h3>
								<p><span>Founder</span></p>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop