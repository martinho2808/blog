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

    <link rel="stylesheet" href="{{asset('css/slide.css')}}">
@endsection

@section('content')

<h1>Our Gallery</h1>

<!-- Photo Grid -->
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
                            <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery5.jpeg')}}); "> 
									<div class="case-studies-summary">
									</div>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery6.jpeg')}}); ">
									<div class="case-studies-summary">
									</div>
							</li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery7.jpeg')}}); "> 
									<div class="case-studies-summary">
									</div>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{asset('image/gallery8.jpeg')}}); ">
									<div class="case-studies-summary">
									</div>
						</ul>
        
					</div>
				</div>
                <h1>Charity Video</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/CiFoHm7HD94?si=PZJuf_5PE72X-4QO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
</iframe>
@stop