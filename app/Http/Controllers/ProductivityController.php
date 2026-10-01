<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductivityController extends Controller
{
    public function index(): View
    {
        return view('productivity');
    }
}
