<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class player extends Controller
{

    public function index() 
    {
        return view('players');
    }
    
    
    //original stats
    $originalPlayerPointTotal;

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

    $numTeamOverallCarries;
    $numPlayerOverallCarries;
    $numPlayerOverallCarriesPointTotal = $numPlayerOverallCarries * $overallCarriesMult;
    $overallCarryPercentPointTotal = ($numPlayerOverallCarries / $numTeamOverallCarries) * $overallCarryPercentMult;
    $numPlayerFiveYardCarries;
    $numTeamFiveYardCarries;
    $numPlayerFiveYardCarriesPointTotal = $numPlayerFiveYardCarries * $fiveYardCarriesMult;
    $fiveYardCarriesPercentPointTotal = ($numPlayerFiveYardCarries / $numTeamFiveYardCarries) * $fiveYardCarriesPercentMult;
  
    $numPlayerFiveYardTargets;
    $numTeamFiveYardTargets;
    $numPlayerFiveYardTargetsPointTotal = $numPlayerFiveYardTargets * $fiveYardTargetsMult;
    $fiveYardTargetPercentPointTotal = ($numPlayerFiveYardTargets / $numTeamFiveYardTargets) * $fiveYardTargetPercentMult;
  
    $numPlayerOverallTargets;
    $numTeamOverallTargets;
    $numPlayerOverallTargetsPointTotal = $numPlayerOverallTargets * $overallTargetMult;
    $overallTargetPercentPointTotal = ($numPlayerOverallTargets / $numTeamOverallTargets) * $overallTargetPercentMult;
    

    $numPlayerSnaps;
    $numTeamSnaps;
    $snapPercentagePointsTotal = ($numPlayerSnaps / $numTeamSnaps) * $snapPercentMult;

    $numPlayerRecept;
    $receptionPercentPointTotal = ($numPlayerRecept / $numPlayerOverallTargets) * $receptionPercentMult;

    $numRedZoneThrows;
    $numRedZoneThrowsPointTotal = $numRedZoneThrows * $redZoneThrowsMult;
    $numThrowsOverTwenty;
    $numThrowsOverTwentyPointTotal = $numThrowsOverTwenty * $throwsOverTwentyMult;
    $numThrowsOverThirty;
    $numThrowsOverThirtyPointTotal = $numThrowsOverThirty * $throwsOverThirtyMult;
    $numThrowsOverForty;
    $numThrowsOverFortyPointTotal = $numThrowsOverForty * $throwsOverFortyMult;

    $playerUsageTotal = $numPlayerOverallCarriesPointTotal + $overallCarryPercentPointTotal + $numPlayerFiveYardCarriesPointTotal
            + $fiveYardCarriesPercentPointTotal + $numPlayerFiveYardTargetsPointTotal + $fiveYardTargetPercentPointTotal +
            $numPlayerOverallTargetsPointTotal + $overallTargetPercentPointTotal + $snapPercentagePointsTotal + 
            $receptionPercentPointTotal + $numRedZoneThrowsPointTotal + $numThrowsOverTwentyPointTotal + $numThrowsOverThirtyPointTotal + 
            $numThrowsOverFortyPointTotal;

    //old stats account for 80 percent of the new point total while the new usage stats account for 20

   


}
