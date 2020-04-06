<?php

use Illuminate\Database\Seeder;
use App\League;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $league = new League();
      $league->name ="The Motley Crew";
      $league->save();

      $league = new League();
      $league->name ="No Guts No Glory";
      $league->save();

      $league = new League();
      $league->name ="Injured Head & Shoulders";
      $league->save();

      $league = new League();
      $league->name ="Show me the Money";
      $league->save();

      $league = new League();
      $league->name ="The Dirty Dozen";
      $league->save();
    }
}
