<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesPublicController extends Controller
{
    public function index()
    {
        

        $this->viewMenuView();
        $this->viewTeamView();
        $filtered = $this->filtered;

        $team_arr = $this->team_arr;
//return $this->filtered;
        //print_r($filtered);
        $bask = array("Volvo", "BMW", "Toyota");
        return view ('services_pool_spa', compact('filtered', 'team_arr'));

       // return 'hello';
        return view ('services_pool_spa');

    }

    
}
