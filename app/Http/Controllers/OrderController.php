<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $pesanan->save();

        $pembayaran = new Pembayaran();
        $pembayaran->bukti_pembayaran = $buktiPembayaran;
        $pembayaran->status_pembayaran = 'Pending';
        $pembayaran->user_id = $userId;
        $pembayaran->daftar_pesanan_id = $pesanan->id;
        $pembayaran->save();

        $user = User::find(auth()->user()->id);
        $orders = $user->DaftarPesanan;
        return redirect()->route('user.profile')->with('success', 'Order submitted successfully');
    }

    public function showOrder($lapanganId)
    {
        $lapangan = Lapangan::find($lapanganId);
        return view('user.order', compact('lapangan'));
    }
}
