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
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(image/elder_bg.jpg);">
				<div class="desc animate-box">
					<h2><strong>Wellness</strong> Elderly</h2>
					<span>In physical health, mental stimulation, social interation and emotional well-being</span>
				</div>
			</div>
		</div>
		
		
		
		<div id="fh5co-feature-product">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-section">
						<h3>End-of-Life Care</h3>
						<p>Palliative care and end-of-life considerations are important aspects of elderly health<br/>Providing compassionate care tailored to the specific needs of older adults with<br/>life-limiting illnesses is crucial to ensuring comfort and dignity in their final stages of life</p>
					</div>
				</div>

				<div class="row row-bottom-padded-md">
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/elder_1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
					<div class="col-md-6 text-center animate-box">
						<p><img src="{{URL::asset('image/elder_2.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Family and Caregiver Support</h3>
							<p>End-of-Life care also extends to the patient's family members and caregivers. They may require emotional support, respite care, education about the dying process, and assistance with practical matters. Providing support to family members and caregivers helps them navigate the emotional and logistical challenges they may face.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Pain and Symptom Management</h3>
							<p>Effective pain management is a critical component of end-of-life care. The focus is on alleviating physical symptoms such as pain, nausea, shortness of breath, and fatigue. Medications, therapies, and other interventions are used to ensure the patient's comfort and enhance their overall well-being.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature-text">
							<h3>Communication and Shared Decision-Making</h3>
							<p>Open and honest communication between healthcare providers, patients, and their families is essential during end-of-life care. Discussions may involve treatment options, goals of care, advance care planning, and end-of-life preferences. Shared decision-making ensures that the patient's values, wishes, and goals are respected and incorporated into their care plan.</p>
						</div>
					</div>
				</div>

				
			</div>
		</div>
@stop