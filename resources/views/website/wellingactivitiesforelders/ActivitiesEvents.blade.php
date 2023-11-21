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
    <link rel="stylesheet" href="{{asset('css/event_form.css')}}">
@endsection

@section('content')
<div class="container">
	<div class="row row-bottom-padded-md">
		<div class="col-md-15 text-center animate-box">
			<center><p><img src="{{URL::asset('image/activity_1.jpg')}}" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p></center>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
			<h3>Silver Years Wellness Festival: Register Now!</h3>
			<p>Welcome to the "Silver Years Wellness Festival", a day of rejuventation and engagement for seniors.</p>
			<h4>PLEASE FILL IN THE FORM BELOW TO JOIN THIS EXCITING EVENT!</h4>
		</div>
	</div>
</div>


<div class="form">
<form method="POST" action="{{ route('event_submit') }}">
    <h3>Events Register</h3>
    @csrf
    <table>
    <tr>
            <td><label for="fname">User name:</label></td>
            <td><input type="text" id="username" name="user_name" placeholder="test"></td>
        </tr>
        <tr>
            <td><label for="fname">Frist Name:</label></td>
            <td><input type="text" id="fname" name="fname" placeholder="Please enter your First Name"></td>
        </tr>
        <tr>
        <td></td>
            <td><span style="color:red">@error('fname'){{$message}}@enderror</span><td></tr>
        <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" id="lname" name="lname" placeholder="Please enter your Last Name"></td>
        </tr>
        <tr>
        <td></td>
            <td><span style="color:red">@error('lname'){{$message}}@enderror</span><td></tr>
        <tr>
        <tr>
            <td><label for="event">Events:</label></td>
            <td><select id="event_id" name="event_id">
            <option value="">Please select the Events</option>
            <option value="A01">Event1</option>
            <option value="A02">Event2</option>
            <option value="A03">Event3</option>
            <option value="A04">Event4</option>
            </td>
    </select>
        </tr>
        <tr>
        <td></td>
            <td><span style="color:red">@error('event'){{$message}}@enderror</span><td></tr>
        <tr>
            <td><label for="mobile">Mobile Number:</label></td>
            <td><input id="mobile" type="text" name="mobile" placeholder="12345678" pattern="[0-9]{8}"></td>
        </tr>
        <tr>
        <td></td>
            <td><span style="color:red">@error('mobile'){{$message}}@enderror</span><td></tr>
        <tr>
            <td><label for="date">Date:</label></td>
            <td><input type="date" id="date" name="date"></td>
        </tr>
        <tr>
        <td></td>
            <td><span style="color:red">@error('date'){{$message}}@enderror</span><td></tr>
        <tr>
            <td colspan="2"><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
</div>

<div class="row">
<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box"></div>
</div>
@stop