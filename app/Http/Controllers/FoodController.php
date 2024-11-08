<?php
namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $foods = Food::with('hotel')->when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%")
                  ->orWhereHas('hotel', fn($q) => $q->where('name', 'like', "%{$search}%"));
        })->get();

        return view('food.index', compact('foods'));
    }
}
