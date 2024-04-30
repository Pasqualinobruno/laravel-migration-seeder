<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        //dd(Train::all());
        $trains = Train::all();
        return view('home', compact('trains'));
    }
    public function oggi()
    {
        $today = now()->toDateString(); // Ottieni la data odierna
        $trains = Train::whereDate('date', $today)->get();
        return view('oggi', compact('trains'));
    }
}
