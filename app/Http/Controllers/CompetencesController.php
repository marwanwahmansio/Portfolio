<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetencesController extends Controller
{
    public function competences()  
    {
        return view('competences');
    }
}
