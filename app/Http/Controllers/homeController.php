<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() 
    {
        $sum = 5 + 6;
        return $sum;
        //return view('Welcome');
    }
}

