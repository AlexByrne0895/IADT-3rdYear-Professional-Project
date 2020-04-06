<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\League;
use App\Team;
use App\Match;

class ManagerController extends Controller
{
  public function index()
  {
      $managers = Manager::all();

      return view('players.manager.index')->with([
          'managers' => $managers
      ]);
  }

  public function show($id)
  {
    $managers = Manager::findOrFail($id);

      return view('players.manager.show')->with([
          'managers' => $managers
        ]);

  }

}
