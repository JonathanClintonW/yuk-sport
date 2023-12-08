<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'user_id' => 'required|exists:users,id',
            'pax_amount' => 'required|integer|min:1',
            'names.*' => 'required', // Validate names as an array
            'birthdates.*' => 'required', // Validate birthdates as an array
        ]);

        $tripId = $request->input('trip_id');
        $userId = $request->input('user_id');
        $paxAmount = $request->input('pax_amount');
        $names = $request->input('names');
        $birthdates = $request->input('birthdates');

        // You can validate passenger names and birthdates here if needed

        // Create the order with passenger names and birthdates
        $order = new Order();
        $order->trip_id = $tripId;
        $order->user_id = $userId;
        $order->pax_amount = $paxAmount;
        $order->names = json_encode($names); // Store as JSON
        $order->birthdates = json_encode($birthdates); // Store as JSON
        $order->save();

        return view('thankyou');
    }
}
