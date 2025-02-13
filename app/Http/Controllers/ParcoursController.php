<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcoursController extends Controller
{
    public function index()  
    {
        return view('parcours');
    }
}
