<?php

namespace App\Http\Controllers\Admin;

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

      return view('admin.leagues.index')->with([
          'leagues' => $leagues
      ]);
  }

  public function create()
  {
    return view('admin.leagues.create');

  }

  public function store(Request $request)
  {
      $request->validate([
        'name' => 'required|string|min:6|max:100|unique:leagues'
      ]);

      $l = new League();
      $l->name = $request->input('name');
      $l->save();

      return redirect()->route('admin.leagues.index');
  }

  public function show($id)
  {
    $league = League::findOrFail($id);

      return view('admin.leagues.show')->with([
          'league' => $league
        ]);

  }

  public function edit($id)
  {
    $league = League::findOrFail($id);

      return view('admin.leagues.edit')->with([
          'league' => $league
        ]);

  }

  public function update(Request $request, $id)
  {

    $request->validate([
      'name' => 'required|string|min:6|max:100|unique:leagues'
    ]);


    $l = League::findOrFail($id);

      $l->name= $request->input('name');
      $l->save();
      return redirect()->route('admin.leagues.index');
}
  public function destroy($id)
  {
    $league = League::findOrFail($id);
    $league->delete();
    return redirect()->route('admin.leagues.index');
  }
}
