<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Match;
use App\Team;
class MatchController extends Controller
{
  public function index()
  {
      $matches = Match::all();

      return view('matches.index')->with([
          'matches' => $matches
      ]);
  }



  public function show($id)
  {
    $matches = Match::findOrFail($id);

      return view('matches.show')->with([
          'matches' => $matches
        ]);
  }


}
