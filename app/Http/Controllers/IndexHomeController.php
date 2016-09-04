<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Team;
use App\Service;
use App\Http\Requests;

class IndexHomeController extends Controller
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
        return view ('index', compact('filtered', 'team_arr'));

    }

    public function services()
    {
        $this->viewMenuView();
        $this->viewTeamView();
        $this->listServices();
        $filtered = $this->filtered;

        $team_arr = $this->team_arr;
        $listServices = $this->listServices;
//return $this->filtered;
        //print_r($filtered);
        $bask = array("Volvo", "BMW", "Toyota");
        return view ('services_pool_spa', compact('filtered', 'team_arr', 'listServices'));

    }

    public function listServices()
    {

        //  $books = App\Book::with('author.contacts')->get();
        $service = Service::with(array(
            'user',
            'subMenu.product' => function($query) {
                $query->where('deleted', 0);
            }))->get();
        $collection = collect($service);
        $listServices = $collection->reject(function ($key) {
            return $key->deleted == 1;

            //   }) ->sortBy('sort_order');
        }) ->sortBy('sort_order');

        $this->listServices = $listServices;

    }
    
    
    public function viewMenuView()
    {

      //  $books = App\Book::with('author.contacts')->get();
        $menu = Menu::with(array(
            'user',
            'subMenu.product' => function($query) {
                $query->where('deleted', 0);
            }))->get();
        $collection = collect($menu);
        $filtered = $collection->reject(function ($key) {
            return $key->deleted == 1;

            //   }) ->sortBy('sort_order');
        }) ->sortBy('sort_order');

        $this->filtered = $filtered;

    }

    public function viewTeamView()
    {
        //$team = Team::all();
        $team = Team::with('user')->get();
        // $team = load('user');
        //$teams = Teams::all();
        $collection = collect($team);
        $team_arr = $collection->reject(function ($name) {
            return $name->deleted == 1;
        }) ->sortBy('sort_order');
        $this->team_arr = $team_arr;
        //return view ('teamViewAdmin', compact('team_arr'));

    }


    
    
}
