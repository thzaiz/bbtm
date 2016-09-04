<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
use Illuminate\Support\Collection;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewTeamView()
    {
        //$team = Team::all();
       $team = Team::with('user')->get();
       // $team = load('user');
        //$teams = Teams::all();
        $collection = collect($team);
        $filtered = $collection->reject(function ($name) {
            return $name->deleted == 1;
        }) ->sortBy('sort_order');

      return view ('teamViewAdmin', compact('filtered'));

    }

    public function addTeamView()
    {
        return view ('teamAddAdmin');
    }

    public function addTeamInsert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $team = new Team($request->all());
        $team->user_id = Auth::id();
        $team->save();
        return \Redirect::to('/teamViewAdmin');

    }


    public function editTeam(Team $id)
    {
        return view('teamEditAdmin', compact('id'));
    }


    public function updateStaff(Request $request, Team $id)
    {
        // dd($request->all());
        $id->update($request->all());
        // $id->update($request->name);
        // $request->all();
        return \Redirect::to('/teamViewAdmin');
    }

}
