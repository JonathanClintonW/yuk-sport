<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\DaftarPesanan;
use App\Models\User;

class UserController extends Controller
{

    public function showProfile()
    {
        $user = User::find(auth()->user()->id);
        $orders = $user->DaftarPesanan;
        return view('user.profile', compact('user', 'orders'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'password' => 'nullable|min:8|confirmed', 
        ]);

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        /** @var \App\Models\User $user **/
        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    }
}
