<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Listing</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>
    <h1>Food Listing</h1>
    <form action="{{ url('/foods') }}" method="get">
        <input type="text" name="search" placeholder="Search foods..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

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
</body>
</html>
