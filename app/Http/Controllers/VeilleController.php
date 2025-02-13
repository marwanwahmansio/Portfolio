<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeilleController extends Controller
{
    public function index()  
    {
        return view('veille');
    }
}
