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
    <form method="GET">
        <label>Database:</label>
        <select name="db_table">
            <option value="DB1" selected>DB1</option>
            <option value="DB2">DB2</option>
            <option value="DB3">DB3</option>
            <option value="DB4">DB4</option>
        </select>
        <label>Soft</label>
        @if($noData)
            <select name="order" disabled="disabled">
                <option value="">Please select field name</option>
            @else
                <select name="order">
                    <option value="">Please select field name</option>
                    @foreach ($tableData[0] as $columnName => $name)
                        <option value="{{ $columnName }}">{{ $columnName }}</option>
                    @endforeach
                </select>
            @endif
            <input type="submit" id="submit" value="Submit" />
    </form>
    @if($noData)
        <p>No data found.</p>
    @else
        <table>
            <thead>
                <tr>
                    @foreach ($tableData[0] as $columnName => $name)
                        <th>{{ $columnName }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($tableData as $row)
                    <tr>
                        @foreach ($row as $column)
                            <td>{{ $column }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $page_show_data->links() }}
    @endif
@endsection