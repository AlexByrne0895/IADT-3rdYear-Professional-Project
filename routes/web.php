<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
 Route::get('/manager/home', 'Manager\HomeController@index')->name('manager.home');
 Route::get('/player/home', 'Player\HomeController@index')->name('player.home');

 Route::resource('/admin/leagues',   'Admin\LeagueController',   array("as"=>"admin"));
 Route::resource('/admin/teams', 'Admin\TeamController', array("as"=>"admin"));
 Route::resource('/admin/players',   'Admin\PlayerController',   array("as"=>"admin"));
 Route::resource('/admin/matches', 'Admin\MatchController', array("as"=>"admin"));
 Route::resource('/admin/managers', 'Admin\ManagerController', array("as"=>"admin"));

 // Route::resource('/manager/leagues',   'Manager\LeagueController',   array("as"=>"manager"))->except([
 //   'create', 'store', 'destroy'
 // ]);
 Route::resource('/manager/teams', 'Manager\TeamController', array("as"=>"manager"))->except([
   'create', 'store', 'destroy'
 ]);

 Route::resource('/player/teams', 'Player\TeamController', array("as"=>"player"))->except([
   'create', 'store', 'edit', 'destroy'
 ]);

 Route::resource('/manager/leagues',   'Manager\LeagueController',   array("as"=>"manager"));
 Route::resource('/manager/teams', 'Manager\TeamController', array("as"=>"manager"));
 Route::resource('/manager/players',   'Manager\PlayerController',   array("as"=>"manager"));
 Route::resource('/manager/matches', 'Manager\MatchController', array("as"=>"manager"));
 Route::resource('/manager/managers', 'Manager\TrainingController', array("as"=>"manager"));

 Route::resource('/player/leagues',   'Player\LeagueController',   array("as"=>"player"));
 Route::resource('/player/teams', 'Player\TeamController', array("as"=>"player"));
 Route::resource('/player/players',   'Player\PlayerController',   array("as"=>"player"));
 Route::resource('/player/matches', 'Player\MatchController', array("as"=>"player"));
 Route::resource('/player/managers', 'Player\ManagerController', array("as"=>"player"));

 // Route::get('/leagues', 'LeagueController@index')->name('admin.leagues.index');
 // Route::get('/leagues/{id}', 'LeagueController@show')->name('admin.leagues.show');
 // Route::post('/leagues', 'LeagueController@create')->name('admin.leagues.create');
 // Route::get('/leagues', 'LeagueController@edit')->name('admin.leagues.edit');
 // Route::put('/leagues', 'LeagueController@update')->name('admin.leagues.update');
 //
 // Route::get('/leagues', 'LeagueController@show')->name('leagues.show');
 //
 //
 //
 //
 //
 // Route::get('/leagues', 'LeagueController@index')->name('admin.leagues.index');
 // Route::get('/leagues', 'LeagueController@index')->name('admin.leagues.show');
 // Route::get('/leagues', 'LeagueController@index')->name('leagues.index');

 //Route::resource('/manager/players',   'Manager\PlayerController',   array("as"=>"manager"));
 //Route::resource('/manager/matches', 'Manager\MatchController', array("as"=>"manager"));
 //Route::resource('/manager/managers', 'Manager\ManagerController', array("as"=>"manager"));

 //Route::resource('/player/leagues',   'Player\LeagueController',   array("as"=>"player"));
 //Route::resource('/player/teams', 'Player\TeamController', array("as"=>"player"));
 //Route::resource('/player/players',   'Player\PlayerController',   array("as"=>"player"));
 //Route::resource('/player/matches', 'Player\MatchController', array("as"=>"player"));
 //Route::resource('/player/managers', 'Player\ManagerController', array("as"=>"player"));

 // Route::get('/Admin/players', 'PlayerController@index')->name('admin.players.index');
 // Route::get('/Admin/players/{id}', 'PlayerController@show')->name('admin.players.show');
 // Route::post('/Admin/players', 'PlayerController@create')->name('admin.players.create');
 // Route::get('/Admin/players', 'PlayerController@edit')->name('admin.players.edit');
 // Route::put('/Admin/players', 'PlayerController@update')->name('admin.players.update');

 //Route::get('/players', 'PlayerController@index')->name('manager.players.index');
 //Route::get('/players/{id}', 'PlayerController@show')->name('manager.players.show');

 //Route::get('/players', 'PlayerController@index')->name('player.players.index');
 //Route::get('/players/{id}', 'PlayerController@show')->name('player.players.show');

  //Route::get('/Admin/leagues', 'LeagueController@index')->name('admin.leagues.index');
  //Route::get('/Admin/leagues/{id}', 'LeagueController@show')->name('admin.leagues.show');
  //Route::post('/Admin/leagues', 'LeagueController@create')->name('admin.leagues.create');
  //Route::get('/Admin/leagues', 'LeagueController@edit')->name('admin.leagues.edit');
  //Route::put('/Admin/leagues', 'LeagueController@update')->name('admin.leagues.update');

 //Route::get('/leagues', 'LeagueController@index')->name('manager.leagues.index');
 //Route::get('/leagues/{id}', 'LeagueController@show')->name('manager.leagues.show');

 //Route::get('/leagues', 'LeagueController@index')->name('player.leagues.index');
 //Route::get('/leagues/{id}', 'LeagueController@show')->name('player.leagues.show');

  //Route::get('/Admin/matches', 'MatchController@index')->name('admin.matches.index');
  //Route::get('/Admin/matches/{id}', 'MatchController@show')->name('admin.matches.show');
  //Route::post('/Admin/matches', 'MatchController@create')->name('admin.matches.create');
  //Route::get('/Admin/matches', 'MatchController@edit')->name('admin.matches.edit');
  //Route::put('/Admin/matches', 'MatchController@update')->name('admin.matches.update');

// Route::get('/matches', 'MatchController@index')->name('manager.matches.index');
// Route::get('/matches/{id}', 'MatchController@show')->name('manager.matches.show');

// Route::get('/matches', 'MatchController@index')->name('player.matches.index');
// Route::get('/matches/{id}', 'MatchController@show')->name('player.matches.show');

 // Route::get('/Admin/managers', 'ManagerController@index')->name('admin.managers.index');
 // Route::get('/Admin/managers/{id}', 'ManagerController@show')->name('admin.managers.show');
 // Route::post('/Admin/managers', 'ManagerController@create')->name('admin.managers.create');
 // Route::get('/Admin/managers', 'ManagerController@edit')->name('admin.managers.edit');
 // Route::put('/Admin/managers', 'ManagerController@update')->name('admin.managers.update');

// Route::get('/managers', 'ManagerController@index')->name('manager.managers.index');
// Route::get('/managers/{id}', 'ManagerController@show')->name('manager.matches.show');

// Route::get('/managers', 'ManagerController@index')->name('player.managers.index');
// Route::get('/managers/{id}', 'ManagerController@show')->name('player.managers.show');

 // Route::get('/Admin/teams', 'TeamController@index')->name('admin.teams.index');
 // Route::get('/Admin/teams/{id}', 'TeamController@show')->name('admin.teams.show');
 // Route::post('/Admin/teams', 'TeamController@create')->name('admin.teams.create');
 // Route::get('/Admin/teams', 'TeamController@edit')->name('admin.teams.edit');
 // Route::put('/Admin/teams', 'TeamController@update')->name('admin.teams.update');

// Route::get('/teams', 'TeamController@index')->name('manager.teams.index');
// Route::get('/teams/{id}', 'TeamController@show')->name('manager.teams.show');

// Route::get('/teams', 'TeamController@index')->name('player.teams.index');
// Route::get('/teams/{id}', 'TeamController@show')->name('player.teams.show');
