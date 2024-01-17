<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lapangan;
use App\Models\DaftarPesanan;
use App\Models\Pembayaran;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function showAdminIndex()
    {
        $admin = Auth::guard('admin')->user();

        if ($admin) {
            $orders = DaftarPesanan::whereIn('lapangan_id', $admin->lapangan->pluck('id'))->with(['lapangan', 'user'])->simplePaginate(5);
    
            return view('/admin/admin-index', compact('orders'));
        } else {
            return redirect()->route('admin.login')->with('error', 'Please log in to view orders');
        }
    }

    public function showManageProduct()
    {
        $admin = Auth::guard('admin')->user();
    
        if ($admin) {
            $lapangans = $admin->lapangan;
    
            return view('admin.manage-product', compact('lapangans'));
        } else {
            return redirect()->route('admin.login')->with('error', 'Please log in to manage products');
        }
    }

    public function showAddProduct()
    {
        return view('/admin/add-product');
    }

    public function showListProduct()
    {
        $admin = Auth::guard('admin')->user();

        if ($admin) {
            $lapangans = $admin->lapangan;
    
            return view('/admin/list-product', compact('lapangans'));
        } else {
            return redirect()->route('admin.login')->with('error', 'Please log in to view lapangans');
        }
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_lapangan' => 'required|string',
            'alamat' => 'required|string',
            'kategori' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'path_gambar.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($admin = Auth::guard('admin')->user()) {
        $lapangan = new Lapangan($validatedData);

        $lapangan->admin_id = $admin->id;

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
        } else {

            return redirect()->route('admin.login')->with('error', 'Please log in to add a lapangan');
        }
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

    public function changePaymentStatus(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'status_pembayaran' => 'required|in:Pending,Gagal,Berhasil',
        ]);
        $pembayaran->status_pembayaran = $request->input('status_pembayaran');
        $pembayaran->save();
    
        return redirect()->back()->with('status', 'Pembayaran status updated successfully.');
    }

    public function changeOrderStatus(Request $request, DaftarPesanan $pesanan)
    {
        $request->validate([
            'status_pesanan' => 'required|in:Pending,Gagal,Berhasil,Selesai',
        ]);
        $pesanan->status_pesanan = $request->input('status_pesanan');
        $pesanan->save();
    
        return redirect()->back()->with('status', 'Pesanan status updated successfully.');
    }
}
