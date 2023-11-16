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
<h1>Management</h1>

<table>
    <thead>
    <tr>
    @foreach ($tableData[0] as $columnName => $name)
        <th>{{ $columnName }}</th>
    @endforeach
</tr>
</tr>
    </thead>
    <tbody>
    @foreach ($tableData as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->fname }}</td>
        <td>{{ $row->lname }}</td>
        <td>{{ $row->event }}</td>
        <td>{{ $row->mobile }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->date }}</td>
        <!-- 添加更多需要显示的表格列 -->
    </tr>
    @endforeach
    </tbody>
</table>
@stop