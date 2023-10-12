<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showIndex()
    {
        return view('index');
    }

    public function showAdminRegistration()
    {
        return view('auth.admin-register');
    }

    public function showDestination()
    {
        return view('destination');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showProfile()
    {
        $user = User::find(auth()->user()->id); 
        return view('user.profile', compact('user'));
    }


}
