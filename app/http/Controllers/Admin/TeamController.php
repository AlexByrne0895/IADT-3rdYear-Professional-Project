<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Team;
use App\Match;
use App\League;
use App\Manager;
use App\Player;

class TeamController extends Controller
{
  public function index()
  {
      $teams = Team::all();

      return view('admin.teams.index')->with([
          'teams' => $teams
      ]);
  }

  public function create()
  {
      $leagues = League::all();
      $managers = Manager::all();
    return view('admin.teams.create')->with([
        'leagues' => $leagues,
        'managers' => $managers

      ]);

  }

  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required|max:100',
          'address' => 'required|max:100',
          'phone' => 'required|min:8|max:15',
          'league_id' => 'integer|exists:leagues,id',
          'manager_id' => 'integer|exists:managers,id',
      ]);

      $t = new Team();
      $t->name = $request->input('name');
      $t->address = $request->input('address');
      $t->phone = $request->input('phone');
      $t->league_id = $request->input('league_id');
      $t->manager_id = $request->input('manager_id');
      $t->save();

      return redirect()->route('admin.teams.index');
  }

  public function show($id)
  {
    $team = Team::findOrFail($id);

      return view('admin.teams.show')->with([
          'team' => $team
        ]);
  }

  public function edit($id)
  {
    $team = Team::findOrFail($id);
    $leagues = League::all();
    $managers = Manager::all();
    $matches = Match::all();
    $players = Player::all();

    return view('admin.teams.edit')->with([
        'team' => $team,
        'leagues' => $leagues,
        'managers' => $managers,
        'players' => $players,
        'matches' => $matches,

      ]);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
        'name' => 'required|max:100',
        'address' => 'required|max:100',
        'phone' => 'required|min:8|max:15',
        'league_id' => 'required|integer|exists:leagues,id',
        'manager_id' => 'required|integer|exists:managers,id',
    ]);

    $t = Team::findOrFail($id);
    $t->name = $request->input('name');
    $t->address = $request->input('address');
    $t->phone = $request->input('phone');
    $t->save();

    return redirect()->route('admin.teams.index');
  }

  public function destroy($id)
  {
    $team = Team::findOrFail($id);
    $team->delete();
    return redirect()->route('admin.teams.index');
  }
}
