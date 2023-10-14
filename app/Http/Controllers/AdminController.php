<?php

namespace App\Http\Controllers;

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
        $trips = Trip::all();

        return view('admin.manage-product', compact('trips'));
    }

    public function showAddProduct()
    {
        return view('/admin/add-product');
    }

    public function showListProduct()
    {
        $trips = Trip::all();

        return view('/admin/list-product', compact('trips'));
    }

    public function store(Request $request)
    {
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
            'total_pax' => 'required|integer|min:1',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $slug = str_replace(' ', '-', $validatedData['slug']);
        $trip = new Trip($validatedData);
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('content-images'), $imageName);
                $images[] = $imageName;
            }
            $trip->images = json_encode($images);
        }
        $trip->save();

        return redirect()->route('admin.manage')->with('success', 'Trip created successfully');
    }

    public function edit(Trip $trip)
    {
        $trips = Trip::all();

        return view('admin.edit-form', compact('trip', 'trips'));
    }



    public function update(Request $request, Trip $trip)
    {
        $formData = $request->only([
            'airlines',
            'transit',
            'departure_date',
            'return_date',
            'price',
            'include',
            'exclude',
            'description',
            'total_pax',
        ]);

        $trip->fill($formData);
        $trip->save();

        return redirect()->route('admin.manage')->with('success', 'Trip updated successfully');
    }



    public function delete(Trip $trip)
    {
        $images = json_decode($trip->images, true);
        foreach ($images as $image) {
            $imagePath = public_path('content-images/' . $image);
            if (file_exists($imagePath)) {
                unlink($imagePath); 
            }
        }

        $trip->delete();

        return redirect()->route('admin.manage')->with('success', 'Trip deleted successfully');
    }
}
