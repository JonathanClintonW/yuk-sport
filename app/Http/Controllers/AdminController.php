<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Trip;

class AdminController extends Controller
{
    public function showAdminIndex()
    {
        return view('/admin/admin-index');
    }

    public function showManageProduct()
    {
        return view('/admin/manage-product');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'destination' => 'required|string',
            'airlines' => 'required|string',
            'transit' => 'required|string',
            'departure_date' => 'required|date',
            'return_date' => 'required|date',
            'price' => 'required|numeric',
            'include' => 'nullable|string',
            'exclude' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);

        // Store the image
        $imagePath = $request->file('image')->store('trips', 'public');

        // Create a new Trip instance
        $trip = new Trip($validatedData);
        $trip->image_path = $imagePath; // Save the image path in the database
        $trip->save();

        // Redirect back with a success message or do any additional processing
        return redirect()->route('admin.index')->with('success', 'Trip created successfully');
    }
}
