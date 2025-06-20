<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
      
        return view('dashboard'); // Pass $data if needed: view('dashboard', compact('data'))
    }
}
