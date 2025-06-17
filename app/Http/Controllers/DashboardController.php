<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can fetch data here to pass to the dashboard view if needed
        // $data = ...;

        return view('dashboard'); // Pass $data if needed: view('dashboard', compact('data'))
    }
}
