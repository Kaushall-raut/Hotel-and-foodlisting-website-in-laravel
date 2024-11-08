<?php
namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Food;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalHotels = Hotel::count();
        $totalFoods = Food::count();

        $monthlyData = Hotel::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                            ->groupBy('month')
                            ->get();

        return view('dashboard.index', compact('totalHotels', 'totalFoods', 'monthlyData'));
    }
}
