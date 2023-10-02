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
            'slug' => 'required|string',
            'airlines' => 'required|string',
            'transit' => 'required|string',
            'departure_date' => 'required|date',
            'return_date' => 'required|date',
            'price' => 'required|numeric',
            'include' => 'nullable|string',
            'exclude' => 'nullable|string',
            'description' => 'required|string',
            'pdf' => 'required|mimes:pdf|max:2048', // Adjust the image validation rules as needed
        ]);

        $slug = str_replace(' ', '-', $validatedData['slug']);

        // Store the image
        $pdfPath = $request->file('pdf')->store('pdfs', 'public');

        // Create a new Trip instance
        $trip = new Trip($validatedData);
        $trip->slug = $slug;
        $trip->pdf_path = $pdfPath; // Save the image path in the database
        $trip->save();

        // Redirect back with a success message or do any additional processing
        return redirect()->route('admin.manage')->with('success', 'Trip created successfully');
    }
}
