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

@section('js')
<script src="{{ asset('js/db.js') }}"></script>
@endsection

@section('content')
    <h1>Management</h1>
    <form method="GET" id="db_form">
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
            </select>
        @else
            <select name="order">
                <option value="">Please select field name</option>
                @foreach ($tableData[0] as $columnName => $name)
                    <option value="{{ $columnName }}">{{ $columnName }}</option>
                @endforeach
            </select>
        @endif
        <input type="hidden" id="editing-input" name="editing" value="{{ $editing ? 'true' : 'false' }}">
        <button type="button" onclick="enableEditing()">Modify</button>
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
        @foreach ($row as $columnName => $column)
        @csrf
        <form action="{{ route('updateData', ['db' => $db_table, 'id' => $row->id]) }}" method="POST">
            <td>
                @if ($editing === "true")
                    <input type="text" name="{{ $columnName }}" value="{{ $column }}">
                @else
                    {{ $column }}
                @endif
            </td>
        @endforeach
        @if ($editing === "true")
            <td>
    <button type="submit">Update</button>
</form>
            </td>
            <td>
                <form action="{{ route('deleteData', ['db' => $db_table, 'id' => $row->id]) }}" method="POST">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        @endif
    </tr>
@endforeach
        </tbody>
        </table>
        {{ $page_show_data->links() }}
        <div class="total-data-count">
            Total data found: {{ $page_show_data->total() }}
        </div>
        @endif
@endsection
