<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;


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

    public function showLapangan()
    {
        return view('lapangan');
    }  
}
