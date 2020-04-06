<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\MatchController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Match;
use App\Team;

class MatchController extends Controller
{
  public function index()
  {
      $matches = Match::all();

      return view('admin.matches.index')->with([
          'matches' => $matches
      ]);
  }

  public function create()
  {
      $teams = Team::all();

      return view('admin.matches.create')->with([
          'teams' => $teams
      ]);

  }

  public function store(Request $request)
  {
      $request->validate([
          'date' => 'required|date',
          'time' => 'required|string|max:100',
          'home_team_id' => 'required|exists:teams,id',
          'away_team_id' => 'required|exists:teams,id|different:home_team_id',
      ]);

      $ma = new Match();
      $ma->date = $request->input('date');
      $ma->time = $request->input('time');
      $ma->home_team_id = $request->input('home_team_id');
      $ma->away_team_id = $request->input('away_team_id');
      $ma->save();

      return redirect()->route('admin.matches.index');
  }

  public function show($id)
  {
    $match = Match::findOrFail($id);

      return view('admin.matches.show')->with([
          'match' => $match
        ]);
  }

  public function edit($id)
  {
    $match = Match::findOrFail($id);
    $teams = Team::all();


      return view('admin.matches.edit')->with([
          'match' => $match,
          'teams' => $teams

        ]);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
        'date' => 'required|date',
        'time' => 'required|string|max:100',
        'home_team_id' => 'required|exists:teams,id',
        'away_team_id' => 'required|exists:teams,id|different:home_team_id',

    ]);
    $ma = Match::findOrFail($id);

    $ma->date = $request->input('date');
    $ma->time = $request->input('time');
    $ma->home_team_id = $request->input('home_team_id');
    $ma->away_team_id = $request->input('away_team_id');
    $ma->save();
    return redirect()->route('admin.matches.index');
  }

  public function destroy($id)
  {
    $match = Match::findOrFail($id);
    $match->delete();
    return redirect()->route('admin.matches.index');
  }
}
