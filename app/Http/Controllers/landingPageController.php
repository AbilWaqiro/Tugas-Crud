<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // Method to show the landing page
    public function index()
    {
        return view('landing-page.page');
    }
}

