<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function showProfile()
    {
        $user = User::find(auth()->user()->id);
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        /** @var \App\Models\User $user **/
        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    }
}
