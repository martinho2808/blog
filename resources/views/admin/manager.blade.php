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
    <!-- table style -->
    <link rel="stylesheet" href="{{asset('css/db_display.css')}}">
@endsection

@section('js')
<script src="{{ asset('js/manager.js') }}"></script>
@endsection

@section('content')
    <h1>Management</h1>
    <!-- form for order / select table / search -->
    <form method="GET" id="db_form" class="db_form">
        <label>Database:</label>
        <select name="db_table">
            <!-- use loop get table name,  data come form controller -->
    @foreach ($tableNames as $tableName)
        <option value="{{ $tableName }}" {{ $db_table == $tableName ? 'selected' : '' }}>
            {{ $tableName }}
        </option>
    @endforeach
</select>
        <label>Soft</label>
        <!-- if data not find. off the soft select -->
        @if($noData)
            <select name="order" disabled="disabled">
                <option value="">Please select field name</option>
            </select>
        @else
            <select name="order">
                <option value="">Please select field name</option>
                <!-- loop use table columname, data come form controller -->
                @foreach ($tableData[0] as $columnName => $name)
                    <option value="{{ $columnName }}">{{ $columnName }}</option>
                @endforeach
            </select>
        @endif
        <!-- Search functions -->
        <label>Search:</label>
        <input type="text" name="search" value="" placeholder="Search by keyword">
        <input type="hidden" id="page-input" name="page" value="{{ $page }}"><br>
        <!-- modify functions -->
        @if ($editing === "false")
        <input type="hidden" id="editing-input" name="editing" value="{{ $editing = 'true' }}">
        <input type="submit" value="Modify OFF" />
        @else
        <input type="hidden" id="editing-input" name="editing" value="{{ $editing = 'false'}}">
        <input type="submit" value="Modify ON" />
        @endif
        <input type="submit" onclick=excludeField() value="Submit" />
    </form>

    <!-- display data finded -->
    <label><b>Total data found: {{ $totalDataCount }}</b></label>
    <!-- download link -->
    <a href="{{ route('downloadPdf', ['db' => $db_table, 'order' => $order ?? 'null', 'search' => $search ?? 'null']) }}" target="_blank" class="download-link">Download Table PDF</a>
    <a href="{{ route('downloadAllTables') }}" target="_blank" class="download-link">Download Report</a>
    @if (session('Data_updata_successfully'))
    <div><dialog open>Data Updata Successfully!<form method='dialog'><button>OK</button></form></dialog></div>
    @elseif (session('Data_deleted_successfully'))
    <div><dialog open>Data Deleted Successfully!<form method='dialog'><button>OK</button></form></dialog></div>
    @endif
    <!-- if have not data, will display not data found -->
    @if($noData)
    <table>
    <tr><th>Error Message</th></tr>
    <tr><td>No data found.</td></tr>
</table>
    @else
        <table>
            <thead>
                <tr>
                    <th></th>
                    <!-- loop use table columname, data come form controller -->
                    @foreach ($tableData[0] as $columnName => $name)
                        <th>{{ $columnName }}</th>
                    @endforeach
                    @if ($editing === "true")
                        <th></th>
                        <th></th>
                    @endif
                </tr>
            </thead>
                    <tbody>
                    <!-- Prepare the required number of rows -->
                    @foreach ($tableData as $row)
            <tr>
            <td></td>
             <!-- push updata and delete button to addtional row -->
            @foreach ($row as $columnName => $column)
            <form action="{{ route('updateData', ['db' => $db_table, 'id' => $row->id]) }}" method="POST">
                @csrf    
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
        <!-- Paginator -->
        <div class="total-data-count">
        {{ $page_show_data->links('pagination::bootstrap-4') }}
</div>
        @endif
@endsection

