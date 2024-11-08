<?php
namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $hotels = Hotel::when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })->get();

        return view('hotel.index', compact('hotels'));
    }
}
