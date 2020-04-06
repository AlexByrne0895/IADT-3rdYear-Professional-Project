<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\League;
use App\Team;
use App\Match;

class LeagueController extends Controller
{
  public function index()
  {
      $leagues = League::all();

      return view('player.leagues.index')->with([
          'leagues' => $leagues
      ]);
  }

  public function show($id)
  {
    $league = League::findOrFail($id);

      return view('player.leagues.show')->with([
          'league' => $league
        ]);

  }

}
