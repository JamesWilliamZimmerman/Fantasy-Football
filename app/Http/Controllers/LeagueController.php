<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;

class LeagueController extends Controller

{
    
    public function index() 
    {
        $league = League::all();
        return view('league.index')->with('league', $league);
    }
}

