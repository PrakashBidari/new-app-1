@extends('admin.master')
@section('master')
    <style>
        /* Apply general styles to the table */
        .my-table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Style table headers */
        .my-table th {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        /* Style table rows */
        .my-table tr {
            border: 1px solid #ccc;
        }

        /* Style alternating row colors for better readability */
        .my-table tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        /* Style table cells */
        .my-table td {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>

    <div class="blood-request-admin">
        <h1>Blood Donation Request</h1>
        <table class="my-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Blood Type</th>
                    <th>Phone No</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($bloods as $blood)
                    <tr>
                        <td>{{ $blood->name }}</td>
                        <td>{{ $blood->email }}</td>
                        <td>{{ $blood->address }}</td>
                        <td>{{ $blood->blood_type }}</td>
                        <td>{{ $blood->phone }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
