<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchupController extends Controller
{
    public function index() 
    {
        return view('matchup.index');
    }
}
