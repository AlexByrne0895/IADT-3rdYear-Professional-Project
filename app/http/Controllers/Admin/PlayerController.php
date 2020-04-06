<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

use App\Player;
use App\Team;
use App\Role;
use App\User;

class PlayerController extends Controller
{
  public function index()
  {
      $players = Player::all();

      return view('admin.players.index')->with([
          'players' => $players
      ]);
  }

  public function create()
  {
      $teams = Team::all();
      return view('admin.players.create')->with([
          'teams' => $teams
      ]);

  }

  public function store(Request $request)
  {
      $request->validate([

          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'position' => 'required|string|max:100',
          'date_of_birth' => 'required|date',
          'phone_number' => 'required|min:8|max:15|unique:players',
          'address' => 'required|string|max:100',
          'emergency_name' => 'required|string|max:100',
          'emergency_number' => 'required|min:8|max:15|unique:players',
          'team_id' => 'required|integer|exists:teams,id'

      ]);

      DB::transaction(function () use ($request) {
          $u = new User();
          $u->name = $request->input('name');
          $u->email = $request->input('email');
          $u->password = Hash::make('player');
          $u->save();

          $role = Role::where('name', 'player')->first();
          $u->roles()->attach($role->id);

          $p = new Player();
          $p->position = $request->input('position');
          $p->date_of_birth = $request->input('date_of_birth');
          $p->phone_number = $request->input('phone_number');
          $p->address = $request->input('address');
          $p->emergency_name = $request->input('emergency_name');
          $p->emergency_number = $request->input('emergency_number');
          $p->team_id = $request->input('team_id');
          $p->user_id = $u->id;
          $p->save();
      });

      return redirect()->route('admin.players.index');
  }

  public function show($id)
    {
        $player = Player::findOrFail($id);

        return view('admin.players.show')->with([
            'player' => $player
        ]);
    }

  public function edit($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::all();

        return view('admin.players.edit')->with([
            'player' => $player,
            'teams' => $teams
        ]);
    }

  public function update(Request $request, $id)
  {
      $request->validate([

          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users,id,' . $id,
          'password' => 'required|string|min:6|confirmed',
          'position' => 'required|string|max:100',
          'date_of_birth' => 'required|date',
          'phone_number' => 'required|min:8|max:15|unique:players',
          'address' => 'required|string|max:100',
          'emergency_name' => 'required|string|max:100',
          'emergency_number' => 'required|min:8|max:15|unique:players',
          'team_id' => 'required|integer|exists:teams,id'
      ]);

      DB::transaction(function () use ($request,$id)
      {
          $p = Player::findOrFail($id);
          $u = User::findOrFail($p->user_id);

          $p->position = $request->input('position');
          $p->date_of_birth = $request->input('date_of_birth');
          $p->phone_number = $request->input('phone_number');
          $p->address = $request->input('address');
          $p->emergency_name = $request->input('emergency_name');
          $p->emergency_number = $request->input('emergency_number');
          $p->save();

          $u->name = $request->input('name');
          $u->email = $request->input('email');
          $u->save();
      });
    return redirect()->route('admin.players.index');
  }

  public function destroy($id)
  {
      DB::transaction(function () use ($id) {
        $player = Player::findOrFail($id);
        $user = User::findOrFail($player->user_id);
        $player->delete();
        $user->delete();
    });
    return redirect()->route('admin.players.index');
  }
}
