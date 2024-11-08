<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Listing</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        button{
            width:5rem;
            height:1.5rem;
            border-radius:10px;
            background-color:blue;
        }
        button:hover{
            background-color:transparent;
        }
        .formContainer{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
            margin:8px;
        }
        input{
            height:1.5rem;
            border-radius:10px;
        }
    </style>
</head>
<body>
@extends('navbar.index')

@section('content')
<div class="formContainer">


    <h1>Search Food</h1>
    <form action="{{ url('/foods') }}" method="get">
        <input type="text" name="search" placeholder="Search foods..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>
    </div>
    <table>
        <thead>
            <tr><th>Name</th><th>Price</th><th>Hotel</th></tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->price }}</td>
                    <td>{{ $food->hotel->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>
