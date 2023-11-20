@extends('layout.default')

@section('styles')
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	
	<link rel="stylesheet" href="{{asset('css/gameStyle.css')}}">
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
	
    <script src="{{asset('js/gameScript.js')}}"> </script>
@endsection

@section('content')
		<div id="fh5co-content-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>What is dementia?</h3>
						<p>Alzheimer's disease is not normal aging. Instead, the patient's brain cells undergo lesions and rapidly degenerate and die, leading to a decline in brain function. Patients will gradually lose their cognitive abilities, including their memory, language ability, visuospatial judgment, executive ability, calculation and decision-making, etc., which will also affect their daily life, behavior and emotions.</p>
					</div>
				</div>
			</div>	
		</div>


		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2>Let's play a mini game for memory match!</h2>
						<div id="inst">
						<li>Make pairs of similiar blocks by flipping them.</li>
						<li>To flip a block you can click on it.</li>
						<li>If two blocks you clicked are not similar, they will be flipped back.</li>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="ol"> </div>
		<div style="height: 8px;"></div>
		<div id="title">
		<span id="logo">MEMORY MATCHING GAME</span>	
		<span id="moves"></span>
		<span id="time"></span>
		</div>
		
		<center>
			<table cellspacing="0"></table>
		</center>
		<br/>
		<br/>
		<br/>
@stop