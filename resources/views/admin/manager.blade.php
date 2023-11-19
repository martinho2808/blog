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
    <form method="GET" id="db_form">
        <label>Database:</label>
        <select name="db_table">
        <option value="DB1" {{ $db_table == 'DB1' ? 'selected' : '' }}>DB1</option>
        <option value="DB2" {{ $db_table == 'DB2' ? 'selected' : '' }}>DB2</option>
        <option value="DB3" {{ $db_table == 'DB3' ? 'selected' : '' }}>DB3</option>
        <option value="DB4" {{ $db_table == 'DB4' ? 'selected' : '' }}>DB4</option>
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
        @if ($editing === "false")
        <input type="hidden" id="editing-input" name="editing" value="{{ $editing = 'true' }}">
        <input type="submit" value="Modify ON" />
        @else
        <input type="hidden" id="editing-input" name="editing" value="{{ $editing = 'false'}}">
        <input type="submit" value="Modify OFF" />
        @endif
        <input type="submit" value="Submit" />
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
                @if ($editing === "false")
                    <input type="text" name="{{ $columnName }}" value="{{ $column }}">
                @else
                    {{ $column }}
                @endif
            </td>
        @endforeach
        @if ($editing === "false")
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
