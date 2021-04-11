<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class AdisController extends Controller
{
    public function index()
    {
    	return view('frontend.home');
    }
}
