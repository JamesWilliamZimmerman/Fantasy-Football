<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Week;

class PlayerController extends Controller
{
     public function index() 
     {
    $counter = 0;
    $array = array();     
    $players = Week::all();
    //original stats
    foreach($players as $player){

    //multipliers/algorithms RBs WRs TEs
    $fiveYardCarriesMult = 1;
    $fiveYardCarriesPercentMult = .5;
    $overallCarriesMult = .05;
    $overallCarryPercentMult = .1;
    $fiveYardTargetsMult = 1;
    $fiveYardTargetPercentMult = .5;
    $overallTargetMult = .1;
    $overallTargetPercentMult = .1;
    $snapPercentMult = .1;
    $receptionPercentMult = .25;

    //multipliers/algorithms QBs
    $redZoneThrowsMult = 1;
    $throwsOverTwentyMult = 1;
    $throwsOverThirtyMult = 2;
    $throwsOverFortyMult = 3;

    $numTeamOverallCarries = $player->TeamOverallCarries;
    $numPlayerOverallCarries = $player->PlayerOverallCarries;
    $numPlayerOverallCarriesPointTotal = $numPlayerOverallCarries * $overallCarriesMult;
    $overallCarryPercentPointTotal = $numPlayerOverallCarries * $numTeamOverallCarries * $overallCarryPercentMult;
    $numPlayerFiveYardCarries = $player->PlayerFiveYardCarries;
    $numTeamFiveYardCarries = $player->TeamFiveYardCarries;
    $numPlayerFiveYardCarriesPointTotal = $numPlayerFiveYardCarries * $fiveYardCarriesMult;
    $fiveYardCarriesPercentPointTotal = $numPlayerFiveYardCarries * $numTeamFiveYardCarries * $fiveYardCarriesPercentMult;
  
    $numPlayerFiveYardTargets = $player->PlayerFiveYardTargets;
    $numTeamFiveYardTargets = $player->TeamFiveYardTargets;
    $numPlayerFiveYardTargetsPointTotal = $numPlayerFiveYardTargets * $fiveYardTargetsMult;
    $fiveYardTargetPercentPointTotal = $numPlayerFiveYardTargets * $numTeamFiveYardTargets * $fiveYardTargetPercentMult;
  
    $numPlayerOverallTargets = $player->PlayerOverallTargets;
    $numTeamOverallTargets = $player->TeamOverallTargets;
    $numPlayerOverallTargetsPointTotal = $numPlayerOverallTargets * $overallTargetMult;
    $overallTargetPercentPointTotal = $numPlayerOverallTargets * $numTeamOverallTargets * $overallTargetPercentMult;
    

    $numPlayerSnaps = $player->PlayerSnaps;
    $numTeamSnaps = $player->TeamSnaps;
    $snapPercentagePointsTotal = $numPlayerSnaps * $numTeamSnaps * $snapPercentMult;

    $numPlayerRecept = $player->PlayerReceptions;
    $receptionPercentPointTotal = $numPlayerRecept * $numPlayerOverallTargets * $receptionPercentMult;

    $numRedZoneThrows = $player->RedZoneThrows;
    $numRedZoneThrowsPointTotal = $numRedZoneThrows * $redZoneThrowsMult;
    $numThrowsOverTwenty = $player->ThrowsOverTwenty;
    $numThrowsOverTwentyPointTotal = $numThrowsOverTwenty * $throwsOverTwentyMult;
    $numThrowsOverThirty = $player->ThrowsOverThirty;
    $numThrowsOverThirtyPointTotal = $numThrowsOverThirty * $throwsOverThirtyMult;
    $numThrowsOverForty = $player->ThrowsOverForty;
    $numThrowsOverFortyPointTotal = $numThrowsOverForty * $throwsOverFortyMult;

    $playerUsageTotal = $numPlayerOverallCarriesPointTotal + $overallCarryPercentPointTotal + $numPlayerFiveYardCarriesPointTotal
            + $fiveYardCarriesPercentPointTotal + $numPlayerFiveYardTargetsPointTotal + $fiveYardTargetPercentPointTotal +
            $numPlayerOverallTargetsPointTotal + $overallTargetPercentPointTotal + $snapPercentagePointsTotal + 
            $receptionPercentPointTotal + $numRedZoneThrowsPointTotal + $numThrowsOverTwentyPointTotal + $numThrowsOverThirtyPointTotal + 
            $numThrowsOverFortyPointTotal;
    $playerUsageTotal = $playerUsageTotal+300;
    $playerUsageTotal = $playerUsageTotal/40;
    //old stats account for 80 percent of the new point total while the new usage stats account for 20
    $array[$counter] = (int) $playerUsageTotal;
    $counter++;
    }
        //$players = Week::all();
        return view('player.index')->with('players', $players);
    }
   
    

}
