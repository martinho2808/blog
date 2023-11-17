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
<div class="form">
<form method="POST" action="{{ route('event_submit') }}">
    <h3>Events Register</h3>
    @csrf
    <table>
        <tr>
            <td><label for="fname">Frist Name:</label></td>
            <td><input type="text" id="fname" name="fname"></td>
        </tr>
        <tr>
            <td><span style="color:red">@error('fname'){{$message}}@enderror</span><td></tr>
        <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" id="lname" name="lname"></td>
        </tr>
        <tr>
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
            <td><span style="color:red">@error('event'){{$message}}@enderror</span><td></tr>
        <tr>
        <tr>
            <td><label for="mobile">Mobile Number:</label></td>
            <td><input type="number" id="mobile" name="mobile"></td>
        </tr>
        <tr>
            <td><span style="color:red">@error('mobile'){{$message}}@enderror</span><td></tr>
        <tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>
        <tr>
            <td><span style="color:red">@error('email'){{$message}}@enderror</span><td></tr>
        <tr>
        <tr>
            <td><label for="date">Date:</label></td>
            <td><input type="date" id="date" name="date"></td>
        </tr>
        <tr>
            <td><span style="color:red">@error('date'){{$message}}@enderror</span><td></tr>
        <tr>
        <tr>
            <td colspan="2"><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
</div>
@stop