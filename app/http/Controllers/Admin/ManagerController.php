<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Manager;
use App\Role;
use App\User;
use DB;

class ManagerController extends Controller
{
  public function index()
  {
      $managers = Manager::all();

      return view('admin.managers.index')->with([
          'managers' => $managers
      ]);
  }

  public function create()
  {
      return view('admin.managers.create');

  }

  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'phone_number' => 'required|min:8|max:15',
          'address' => 'required|string|max:100'
    ]);
    DB::transaction(function () use ($request)
    {

        $u = new User();
        $u->name = $request->input('name');
        $u->email = $request->input('email');
        $u->password = Hash::make('manager');
        $u->save();

        $role = Role::where('name', 'manager')->first();
        $u->roles()->attach($role->id);

        $m = new Manager();
        $m->phone_number = $request->input('phone_number');
        $m->address = $request->input('address');
        $m->user_id = $u->id;
        $m->save();

    });

      return redirect()->route('admin.managers.index');
  }

  public function show($id)
  {
    $manager = Manager::findOrFail($id);

      return view('admin.managers.show')->with([
          'manager' => $manager
        ]);
  }

  public function edit($id)
  {
    $manager = Manager::findOrFail($id);


      return view('admin.managers.edit')->with([
          'manager' => $manager

        ]);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,id,' . $id,
        'phone_number' => 'required|min:8|max:15',
        'address' => 'required|string|max:100'
  ]);

  DB::transaction(function () use ($request,$id)
  {
      $m = Manager::findOrFail($id);
      $u = User::findOrFail($m->user_id);

      $m->phone_number = $request->input('phone_number');
      $m->address = $request->input('address');
      $m->save();

      $u->name = $request->input('name');
      $u->email = $request->input('email');
      $u->save();
  });
  return redirect()->route('admin.managers.index');
  }

  public function destroy($id)
  {
      DB::transaction(function () use ($id)
      {
          $manager = Manager::findOrFail($id);
          $user = User::findOrFail($manager->user_id);

          $manager->delete();
          $user->delete();

      });

    return redirect()->route('admin.managers.index');
  }
}
