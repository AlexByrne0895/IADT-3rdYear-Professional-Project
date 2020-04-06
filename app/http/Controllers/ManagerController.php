<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Manager;

class ManagerController extends Controller
{
  public function index()
  {
      $managers = Manager::all();

      return view('managers.index')->with([
          'managers' => $managers
      ]);
  }


  public function show($id)
  {
    $manager = Manager::findOrFail($id);

      return view('managers.show')->with([
          'manager' => $manager
        ]);
  }

}
