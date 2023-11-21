@if (!empty($tableData))
<!DOCTYPE html>
<html>
<head>
    <title>Tables PDF</title>
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
<div class="table-wrapper">
<table style="border:3px #cccccc solid;" cellpadding="10" border='1'>
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
                        <td>{{ $column }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@else
    <p>No data available.</p>
@endif
</body>
</html>