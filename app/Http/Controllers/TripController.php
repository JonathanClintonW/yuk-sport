<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function showJapan()
    {
        $japanTrips = DB::table('trips')->where('destination', 'Japan')->get();

        return view('destination.japan', compact('japanTrips'));
    }

    public function showSwitzerland()
    {
        return view('destination.switzerland');
    }

    public function showFrance()
    {
        return view('destination.france');
    }

    public function showIceland()
    {
        return view('destination.iceland');
    }

    public function showIndonesia()
    {
        return view('destination.indonesia');
    }

    public function showGreece()
    {
        return view('destination.greece');
    }

    public function show($slug)
    {
        $trip = DB::table('trips')->where('slug', $slug)->first();

        if (!$trip) {
            abort(404);
        }

        return view('destination.show', compact('trip'));
    }
}
