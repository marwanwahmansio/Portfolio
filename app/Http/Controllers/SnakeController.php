<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakeController extends Controller
{
    public function snake()  
    {
        return view('snake');
    }
}
