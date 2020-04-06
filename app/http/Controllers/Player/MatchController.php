<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\League;
use App\Team;
use App\Match;
use App\Player;

class MatchController extends Controller
{
  public function index()
  {
      $matches = Match::all();

      return view('player.matches.index')->with([
          'matches' => $matches
      ]);
  }

  public function show($id)
  {
      $matches = Match::findOrFail($id);

      return view('player.matches.show')->with([
          'matches' => $matches
        ]);

  }

}
