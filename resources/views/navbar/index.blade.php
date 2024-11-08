<!-- resources/views/layouts/navbar.blade.php -->
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel & Food Listing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        /* Custom styles */
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
    </style>
</head>
<body>
    <!-- Include Navbar -->
   <!-- resources/views/layouts/navbar.blade.php -->
<nav>
    <ul style="list-style-type: none; display: flex; gap: 20px; background-color: #333; padding: 10px 20px;">
        <li><a href="{{ route('home') }}" style="color: white; text-decoration: none;">Home</a></li>
        <li><a href="{{ route('foods.index') }}" style="color: white; text-decoration: none;">Food Listing</a></li>
        <li><a href="{{ route('hotels.index') }}" style="color: white; text-decoration: none;">Hotel Listing</a></li>
        <li><a href="{{ route('dashboard.index') }}" style="color: white; text-decoration: none;">Dashboard</a></li>
    </ul>
</nav>


    <!-- Page Content -->
    <div class="container">
        <!-- @yield('content') -->
    </div>
</body>
</html>

