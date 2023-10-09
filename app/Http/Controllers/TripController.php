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
        $switzerlandTrips = DB::table('trips')->where('destination', 'Switzerland')->get();
        return view('destination.switzerland', compact('switzerlandTrips'));
    }

    public function showFrance()
    {
        $franceTrips = DB::table('trips')->where('destination', 'France')->get();
        return view('destination.france', compact('franceTrips'));
    }

    public function showIceland()
    {
        $icelandTrips = DB::table('trips')->where('destination', 'Iceland')->get();

        return view('destination.iceland', compact('icelandTrips'));
    }

    public function showIndonesia()
    {
        $indonesiaTrips = DB::table('trips')->where('destination', 'Indonesia')->get();
        return view('destination.indonesia', compact('indonesiaTrips'));
    }

    public function showGreece()
    {
        $greeceTrips = DB::table('trips')->where('destination', 'Greece')->get();
        return view('destination.greece', compact('greeceTrips'));
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
