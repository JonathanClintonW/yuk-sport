<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lapangan;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function showAdminIndex()
    {
        return view('/admin/admin-index');
    }

    public function showManageProduct()
    {
        $lapangans = Lapangan::all();

        return view('admin.manage-product', compact('lapangans'));
    }

    public function showAddProduct()
    {
        return view('/admin/add-product');
    }

    public function showListProduct()
    {
        $lapangans = Lapangan::all();

        return view('/admin/list-product', compact('lapangans'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_lapangan' => 'required|string',
            'alamat' => 'required|string',
            'kategori' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $lapangan = new Lapangan($validatedData);

        if ($request->hasFile('path_gambar')) {
            $path_gambar = [];
            foreach ($request->file('path_gambar') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('content-images'), $imageName);
                $path_gambar[] = $imageName;
            }
            $lapangan->path_gambar = json_encode($path_gambar);
        }
        $lapangan->save();

        return redirect()->route('admin.manage')->with('success', 'Trip created successfully');
    }

    public function edit(Lapangan $lapangan)
    {
        $lapangans = Lapangan::all();

        return view('admin.edit-form', compact('lapangan', 'lapangans'));
    }

    public function update(Request $request, Lapangan $lapangan)
    {
        $lapangan = Lapangan::findOrFail($lapangan->id);

        $formData = $request->only([
            'nama_lapangan',
            'alamat',
            'kategori',
            'harga',
            'deskripsi',
        ]);

        $lapangan->update($formData);

        return redirect()->route('admin.manage')->with('success', 'Lapangan updated successfully');
    }

    public function delete(Lapangan $lapangan)
    {
        $path_gambar = json_decode($lapangan->path_gambar, true);
        foreach ($path_gambar as $image) {
            $imagePath = public_path('content-images/' . $image);
            if (file_exists($imagePath)) {
                unlink($imagePath); 
            }
        }

        $lapangan->delete();

        return redirect()->route('admin.manage')->with('success', 'Lapangan deleted successfully');
    }
}
