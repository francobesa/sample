<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset; // <-- Add this

class page1Controller extends Controller
{
    public function index() {
        $assets = Asset::all();
        return view('page1.index', compact('assets'));
    } 
}
