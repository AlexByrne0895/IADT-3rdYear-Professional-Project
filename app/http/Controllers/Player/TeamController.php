<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Player\TeamController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\League;
use App\Team;
use App\Match;


class TeamController extends Controller
{
  public function index()
  {
      $teams = Team::all();

      return view('player.teams.index')->with([
          'teams' => $teams
      ]);
  }

  public function show($id)
  {
    $team = Team::findOrFail($id);

      return view('player.teams.show')->with([
          'team' => $team
        ]);
  }

}

// class TeamController extends Controller
// {
//   public function __construct()
//   {
//       $this->middleware('auth');
//       $this->middleware('role:player');
//   }
//
//   public function index()
//   {
//     $user = Auth::user();
//     $player = $user->player;
//
//       $teams = Team::where('id', '=', $player->user_id)->get();
//
//       return view('player.teams.index')->with([
//           'teams' => $teams
//       ]);
//   }
//
//   // public function index()
//   // {
//   //   $players = Player::findOrFail($id);
//   //
//   //   return view('player.teams.show')->with([
//   //       'teams' => $teams
//   //     ]);
//   // }
//
//
//   public function show($id)
//   {
//
//       $user = Auth::user();
//       $player = $user->id;
//
//     $team = Team::findOrFail($id);
//     if ($team->user_id != $user->id) {
//       return response('Unauthorised.', 401);
//     }
//
//       return view('player.teams.show')->with([
//           'teams' => $teams
//         ]);
//
//   }
// }
