<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Listing</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>
<!-- @extends('navbar.index') -->

    <h1>Hotel Listing</h1>
    <form action="{{ url('/hotels') }}" method="get">
        <input type="text" name="search" placeholder="Search hotels..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <table>
        <thead>
            <tr><th>Name</th><th>Address</th><th>City</th></tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>{{ $hotel->city }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
