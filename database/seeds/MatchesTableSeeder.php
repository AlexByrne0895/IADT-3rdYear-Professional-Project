<?php

use Illuminate\Database\Seeder;
use App\Match;
use App\Team;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $match = new Match();
      $match->date ="2018-05-12";
      $match->time ="12:00pm";
      $match->home_team_id = Team::where('name', 'Dream Crushers')->first()->id;
      $match->away_team_id = Team::where('name', 'We Showed Up')->first()->id;
      $match->save();

      $match = new Match();
      $match->date ="2018-07-16";
      $match->time ="2:00pm";
      $match->home_team_id = Team::where('name', 'Ragin’ Cajuns')->first()->id;
      $match->away_team_id = Team::where('name', 'Dream Crushers')->first()->id;
      $match->save();
    }
}
