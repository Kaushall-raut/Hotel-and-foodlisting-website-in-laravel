<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        div{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
        }
 .formContainer{
    border:1px solid black;
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
            margin:8px;
            width: 50%;
            border-radius:10px;
        }
    </style>
</head>
<body>
@extends('navbar.index')

@section('content')
<div class="formContainer">


    <h1>Dashboard</h1>
    <p>Total Hotels: {{ $totalHotels }}</p>
    <p>Total Foods: {{ $totalFoods }}</p>

    <h2>Monthly Data</h2>
    <table>
        <thead>
            <tr>
                <th>Month</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($monthlyData as $data)
                <tr>
                    <td>{{ $data->month }}</td>
                    <td>{{ $data->count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @endsection
</body>
</html>
