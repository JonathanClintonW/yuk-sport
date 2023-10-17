<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'government_id' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'passport_id' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'trip_id' => 'required|exists:trips,id',
        ]);

        $user = auth()->user(); // Get the currently authenticated user

        $order = new Order();

        // Store files in the public/content-data directory
        $order->government_id = $request->file('government_id')->store('public/content-data');
        $order->passport_id = $request->file('passport_id')->store('public/content-data');

        $order->trip_id = $request->input('trip_id');
        $order->user_id = $user->id; // You can adjust this based on your user structure
        $order->save();

        // Optionally, you can redirect the user to a thank-you page or any other relevant page.
        return redirect()->route('index');
    }
}
