
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel & Food Listing</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
 
        nav ul {
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            background-color: #333;
            border-radius: 5px;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        div{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
    </style>
</head>
<body>

<nav>
    <ul style="list-style-type: none; display: flex; gap: 20px; background-color: #333; padding: 10px 20px;">
        <li><a href="{{ route('home.index') }}" style="color: white; text-decoration: none;">Home</a></li>
        <li><a href="{{ route('foods.index') }}" style="color: white; text-decoration: none;">Food Listing</a></li>
        <li><a href="{{ route('hotels.index') }}" style="color: white; text-decoration: none;">Hotel Listing</a></li>
        <li><a href="{{ route('dashboard.index') }}" style="color: white; text-decoration: none;">Dashboard</a></li>
    </ul>
</nav>


  
    <div class="container">
        @yield('content')
    </div>

</body>
</html>

