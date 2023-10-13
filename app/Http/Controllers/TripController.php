<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


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

    public function download(Trip $trip)
    {
        // Assuming $trip is an Eloquent model representing your trip

        // Get the path to the PDF file stored in the database
        $pdfPath = 'public/storage/pdfs/' . $trip->pdf_path;

        // Check if the file exists
        if (Storage::exists($pdfPath)) {
            // Generate a dynamic file name if needed
            $fileName = 'your_dynamic_filename.pdf';

            // Return the file for download
            return response()->download(storage_path($pdfPath), $fileName);
        } else {
            // Handle the case when the file does not exist
            return abort(404);
        }
    }
}
