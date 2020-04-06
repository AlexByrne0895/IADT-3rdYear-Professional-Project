<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\League;
use App\Team;
use App\Match;

class MatchController extends Controller
{
  public function index()
  {
      $matches = Match::all();

      return view('manager.matches.index')->with([
          'matches' => $matches
      ]);
  }

  public function show($id)
  {
    $matches = Match::findOrFail($id);

      return view('manager.matches.show')->with([
          'matches' => $matches
        ]);

  }

}
