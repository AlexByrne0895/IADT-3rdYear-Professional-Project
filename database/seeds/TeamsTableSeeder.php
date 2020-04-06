<?php

use Illuminate\Database\Seeder;
use App\User;
use App\League;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = new Team();
        $team ->name ="Dream Crushers";
        $team ->address = rand(1, 100) . "Fake Club";
        $team ->phone ="0863664464";
        $team ->league_id = League::where('name', 'The Motley Crew')->first()->id;
        $team ->manager_id = User::where('email', 'joe@example.com')->first()->manager->id;
        $team->save();

        $team = new Team();
        $team ->name ="We Showed Up";
        $team ->address = rand(1, 100) . "Fake Club";
        $team ->phone ="0873564464";
        $team ->league_id = League::where('name', 'No Guts No Glory')->first()->id;
        $team ->manager_id = User::where('email', 'joe01@hotmail.com')->first()->manager->id;
        $team->save();

        $team = new Team();
        $team ->name ="Ragin’ Cajuns";
        $team ->address = rand(1, 100) . "Fake Club";
        $team ->phone ="0853769464";
        $team ->league_id = League::where('name', 'Injured Head & Shoulders')->first()->id;
        $team ->manager_id = User::where('email', 'adam@example.com')->first()->manager->id;
        $team->save();

        $team = new Team();
        $team ->name ="Scarlet Raptors";
        $team ->address = rand(1, 100) . "Fake Club";
        $team ->phone ="0875484464";
        $team ->league_id = League::where('name', 'Show me the Money')->first()->id;
        $team ->manager_id = User::where('email', 'jade@example.com')->first()->manager->id;
        $team->save();

        $team = new Team();
        $team ->name ="Sea Lions";
        $team ->address = rand(1, 100) . "Fake Club";
        $team ->phone ="0863965463";
        $team ->league_id = League::where('name', 'The Dirty Dozen')->first()->id;
        $team ->manager_id = User::where('email', 'alex@example.com')->first()->manager->id;
        $team->save();
    }
}
