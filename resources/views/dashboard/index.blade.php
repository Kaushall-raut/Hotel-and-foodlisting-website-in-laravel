<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>
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
</body>
</html>
