<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Manager\PlayerController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Player;
use App\Team;


class PlayerController extends Controller
{
  public function index()
  {
      $players = Player::all();

      return view('manager.players.index')->with([
          'players' => $players
      ]);
  }

  public function show($id)
  {
    $players = Player::findOrFail($id);

      return view('manager.players.show')->with([
          'players' => $players
        ]);

  }

}
