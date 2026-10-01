<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DevelopmentController extends Controller
{
    public function index(): View
    {
        return view('development.index');
    }

    public function laravel(): View
    {
        return view('development.laravel');
    }

    public function microservices(): View
    {
        return view('development.microservices');
    }
}