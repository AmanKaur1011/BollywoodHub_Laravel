<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $songs = Song::with('movie')->get();
        return view('dashboard', compact('songs'));
    }
}