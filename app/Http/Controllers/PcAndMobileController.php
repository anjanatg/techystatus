<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PcAndMobileController extends Controller
{
    public function index(): View
    {
        return view('pcandmobile.index');
    }

    public function android(): View
    {
        return view('pcandmobile.android');
    }

    public function ios(): View
    {
        return view('pcandmobile.ios');
    }

    public function linux(): View
    {
        return view('pcandmobile.linux');
    }

    public function windows(): View
    {
        return view('pcandmobile.windows');
    }
}