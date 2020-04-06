<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\League;
use App\Team;
use App\Match;

class TeamController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:manager');
  }

  public function index()
  {
    $user = Auth::user();
    $manager = $user->manager;

      $teams = Team::where('manager_id', '=', $manager->id)->get();

      return view('manager.teams.index')->with([
          'teams' => $teams
      ]);
  }

  public function show($id)
  {

      $user = Auth::user();
      $manager = $user->manager;

    $teams = Team::findOrFail($id);
    if ($teams->manager_id != $manager->id) {
      return response('Unauthorised.', 401);
    }

      return view('manager.teams.show')->with([
          'teams' => $teams
        ]);

  }

}
