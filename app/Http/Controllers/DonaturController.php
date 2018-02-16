<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function timeline()
    {
    	return view('pages.donatur.timeline');
    }
}
