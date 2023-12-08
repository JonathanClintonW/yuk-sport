<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    public function showBadminton()
    {
        $badmintonlapangan = DB::table('lapangan')->where('kategori', 'Badminton')->get();

        return view('category.badminton', compact('badmintonlapangan'));
    }

    public function showBasket()
    {
        $basketlapangan = DB::table('lapangan')->where('kategori', 'Basket')->get();
        return view('category.basket', compact('basketlapangan'));
    }

    public function showFutsal()
    {
        $futsallapangan = DB::table('lapangan')->where('kategori', 'Futsal')->get();
        return view('category.futsal', compact('futsallapangan'));
    }

    public function showGolf()
    {
        $golflapangan = DB::table('lapangan')->where('kategori', 'Golf')->get();

        return view('category.golf', compact('golflapangan'));
    }

    public function showTennis()
    {
        $tennislapangan = DB::table('lapangan')->where('kategori', 'Tennis')->get();
        return view('category.tennis', compact('tennislapangan'));
    }

    public function showVolley()
    {
        $volleylapangan = DB::table('lapangan')->where('kategori', 'Volley')->get();
        return view('category.volley', compact('volleylapangan'));
    }

    public function show($id)
    {
        $trip = DB::table('lapangan')->where('id', $id)->first();

        if (!$id) {
            abort(404);
        }

        return view('category.show', compact('id'));
    }
}
