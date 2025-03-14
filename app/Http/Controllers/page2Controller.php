<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing; 

class page2Controller extends Controller
{
    public function index()
    {
        // Get all inventory items
        $things = Thing::all(); 

        // Pass the items to the view
        return view('page2.index', compact('things'));
    }
}
