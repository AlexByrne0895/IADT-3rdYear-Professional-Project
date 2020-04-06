<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Player;
use App\Teams;
class PlayerController extends Controller
{
  public function index()
  {
      $players = Player::all();

      return view('players.index')->with([
          'players' => $players
      ]);
  }



  public function show($id)
    {
        $player = Player::findOrFail($id);

        return view('players.show')->with([
            'player' => $player
          ]);
    }


}
