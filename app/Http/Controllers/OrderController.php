<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;
use App\Mail\OrderCancelled;
use App\Models\DaftarPesanan;
use App\Models\Pembayaran;
use App\Models\Lapangan;
use App\Models\User;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'lapangan_id' => 'required|exists:lapangan,id',
            'user_id' => 'required|exists:users,id',
            'tanggal_pesanan' => 'required|date',
            'total_jam' => 'required|numeric|min:1|max:10',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        $lapanganId = $request->input('lapangan_id');
        $userId = $request->input('user_id');
        $tanggalPesan = $request->input('tanggal_pesanan');
        $totalJam = $request->input('total_jam');

        $buktiPembayaran = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPembayaran = time() . '_' . $request->file('bukti_pembayaran')->getClientOriginalName();
            $request->file('bukti_pembayaran')->move(public_path('content-payment'), $buktiPembayaran);
        }

        $lapangan = Lapangan::find($lapanganId);
        $totalHarga = $lapangan->harga * $totalJam;

        $pesanan = new DaftarPesanan();
        $pesanan->lapangan_id = $lapanganId;
        $pesanan->user_id = $userId;
        $pesanan->tanggal_pesanan = $tanggalPesan;
        $pesanan->total_jam = $totalJam;
        $pesanan->total_harga = $totalHarga;
        $pesanan->status_pesanan = 'Pending';
        $pesanan->pembatalan = 0;
        $pesanan->save();

        $pembayaran = new Pembayaran();
        $pembayaran->bukti_pembayaran = $buktiPembayaran;
        $pembayaran->status_pembayaran = 'Pending';
        $pembayaran->user_id = $userId;
        $pembayaran->daftar_pesanan_id = $pesanan->id;
        $pembayaran->save();

        $user = User::find(auth()->user()->id);

        $orderDetails = [
            'user_name' => $user->name,
            'user_phone' => $user->phone,
            'lapangan_name' => $lapangan->nama_lapangan,
            'tanggal_pesanan' => $tanggalPesan,
            'total_jam' => $totalJam,
            'total_harga' => $totalHarga,
        ];
        Mail::to($user->email)->send(new OrderCreated($orderDetails));
        return redirect()->route('user.profile')->with('success', 'Order submitted successfully');
    }

    public function showOrder($lapanganId)
    {
        $lapangan = Lapangan::find($lapanganId);
        
        return view('user.order', compact('lapangan'));
    }

    public function cancelOrder($orderId)
    {
        $order = DaftarPesanan::findOrFail($orderId);
        $daftarPesanan = DaftarPesanan::with('lapangan.admin')->find($orderId);
        $admin = $daftarPesanan->lapangan->admin;
        
        if ($order->user_id == auth()->user()->id) {
            $order->status_pesanan = 'Di batalkan';
            $order->pembatalan = 1;
            $order->save();
            
            $cancelDetails = [
                'user_name' => $order->user->name,
                'user_phone' => $order->user->phone,
                'lapangan_name' => $order->lapangan->nama_lapangan,
                'alamat' => $order->lapangan->alamat,
                'status' => $order->status_pesanan,
                'tanggal_pesanan' => $order->tanggal_pesanan,
            ];
        
            Mail::to($admin->email)->send(new OrderCancelled($cancelDetails));
            return redirect()->route('user.profile')->with('success', 'Pesanan berhasil di batalkan');
        } else {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    }
}
