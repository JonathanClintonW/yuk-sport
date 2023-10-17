<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        // Validate the incoming request data (e.g., user ID, trip ID, uploaded files)
        $request->validate([
            'user_id' => 'required|integer',
            'trip_id' => 'required|integer',
            'government_id' => 'required|file|mimes:jpeg,png|max:2048', // Example validation, adjust as needed
            'passport_id' => 'required|file|mimes:jpeg,png|max:2048', // Example validation, adjust as needed
        ]);

        // Handle file uploads and store them in a suitable location (e.g., in the storage folder)
        $governmentIdPath = $request->file('government_id')->store('order_documents');
        $passportIdPath = $request->file('passport_id')->store('order_documents');

        // Create a new order record in the database
        Order::create([
            'user_id' => $request->user_id,
            'trip_id' => $request->trip_id,
            'government_id' => $governmentIdPath,
            'passport_id' => $passportIdPath,
            'payment_id' => null, // You can handle this as needed
        ]);

        // Redirect or return a response to indicate successful order creation
        return redirect()->route('trip.show', $request->trip_id)->with('success', 'Order placed successfully.');
    }
}
