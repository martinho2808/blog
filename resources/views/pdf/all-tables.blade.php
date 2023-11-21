<!DOCTYPE html>
<html>
<head>
    <title>All Tables Report</title>
    <style>
        /* Add your CSS styles here */
        table {
            border-collapse: collapse;
            width: 100%;
            overflow-x: auto; /* Add horizontal scroll */
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
@foreach($data as $tableName => $tableData)
    <h2>{{ $tableName }}</h2>
    <div class="table-wrapper"> {{-- Add a wrapper div --}}
        <table>
            <thead>
                <tr>
                @foreach ($tableData[0] as $columnName => $name)
                    @if ($tableName === 'users' && $columnName === 'password')
                        @continue // Skip the password column
                    @endif
                    <th>{{ $columnName }}</th>
                @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($tableData as $row)
                    <tr>
                    @foreach ($row as $columnName => $column)
                        @if ($tableName === 'users' && $columnName === 'password')
                            @continue // Skip the password column
                        @endif
                        <td>{{ $column }}</td>
                    @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endforeach
</body>
</html>