<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;
use App\Match;
use App\League;

class TeamController extends Controller
{
  public function index()
  {
      $teams = Team::all();

      return view('teams.index')->with([
          'teams' => $teams
      ]);
  }


  public function show($id)
  {
    $team = Team::findOrFail($id);

      return view('teams.show')->with([
          'team' => $team
        ]);
  }


}
