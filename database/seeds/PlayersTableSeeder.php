<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Player;
use App\Team;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_player = Role::where('name', 'player')->first();

      $player_user = new User();
      $player_user->name = 'Mary';
      $player_user->email = 'mary@example.com';
      $player_user->password = bcrypt('player');
      $player_user->save();
      $player_user->roles()->attach($role_player);

      $player = new Player();
      $player->position = "Sebastopol, CA, USA";
      $player->date_of_birth = "2000-12-12";
      $player->phone_number = "0879687564";
      $player->address = "27 fake str";
      $player->emergency_name= "Kevin Smith";
      $player->emergency_number= "0869687364";
      $player->user_id = $player_user->id;
      $player->team_id = Team::where('name', 'Ragin’ Cajuns')->first()->id;
      $player->save();

      $player_user = new User();
      $player_user->name = 'Anne';
      $player_user->email = 'anne@example.com';
      $player_user->password = bcrypt('player');
      $player_user->save();
      $player_user->roles()->attach($role_player);

      $player = new Player();
      $player->position = "Sebastopol, CA, USA";
      $player->date_of_birth = "2000-12-12";
      $player->phone_number = "0865687564";
      $player->address = "25 fake str";
      $player->emergency_name= "Linda Smith";
      $player->emergency_number= "0863387364";
      $player->user_id = $player_user->id;
      $player->team_id = Team::where('name', 'Scarlet Raptors')->first()->id;
      $player->save();

      $player_user = new User();
      $player_user->name = 'Anne';
      $player_user->email = 'anne01@example.com';
      $player_user->password = bcrypt('player');
      $player_user->save();
      $player_user->roles()->attach($role_player);

      $player = new Player();
      $player->position = rand(1, 100) . "Sebastopol, CA, USA";
      $player->date_of_birth = "2000-12-12";
      $player->phone_number = "0875689544";
      $player->address = "25 fake str";
      $player->emergency_name= "Anne Smith";
      $player->emergency_number= "0863388864";
      $player->user_id = $player_user->id;
      $player->team_id = Team::where('name', 'Scarlet Raptors')->first()->id;
      $player->save();

      $player_user = new User();
      $player_user->name = 'David';
      $player_user->email = 'david@example.com';
      $player_user->password = bcrypt('player');
      $player_user->save();
      $player_user->roles()->attach($role_player);

      $player = new Player();
      $player->position =
      $player->date_of_birth ="1990-11-25";
      $player->phone_number ="0879345464";
      $player->address = rand(1, 100) . " Main St";
      $player->emergency_name = "Keith";
      $player->emergency_number ="0865686564";
      $player->user_id = $player_user->id;
      $player->team_id = Team::where('name', 'Dream Crushers')->first()->id;
      $player->save();

      $player_user = new User();
      $player_user->name = 'Jack';
      $player_user->email = 'jack@example.com';
      $player_user->password = bcrypt('player');
      $player_user->save();
      $player_user->roles()->attach($role_player);

      $player = new Player();
      $player->position =
      $player->date_of_birth ="1980-09-10";
      $player->phone_number ="0879745464";
      $player->address = rand(1, 100) . " Main St";
      $player->emergency_name = "Haley";
      $player->emergency_number ="0857887568";
      $player->user_id = $player_user->id;
      $player->team_id = Team::where('name', 'We Showed Up')->first()->id;
      $player->save();

      $player_user = new User();
      $player_user->name = 'Megan';
      $player_user->email = 'megan@example.com';
      $player_user->password = bcrypt('player');
      $player_user->save();
      $player_user->roles()->attach($role_player);

      $player = new Player();
      $player->position =
      $player->date_of_birth ="2000-10-05";
      $player->phone_number ="0870430464";
      $player->address = rand(1, 100) . " Main St";
      $player->emergency_name = "Mark";
      $player->emergency_number ="0869690664";
      $player->user_id = $player_user->id;
      $player->team_id = Team::where('name', 'Sea Lions')->first()->id;
      $player->save();

      $player_user = new User();
      $player_user->name = 'John';
      $player_user->email = 'john@example.com';
      $player_user->password = bcrypt('player');
      $player_user->save();
      $player_user->roles()->attach($role_player);

      $player = new Player();
      $player->position =
      $player->date_of_birth ="1999-12-20";
      $player->phone_number ="0870430464";
      $player->address = rand(1, 100) . " Main St";
      $player->emergency_name = "Amy";
      $player->emergency_number ="0869690664";
      $player->user_id = $player_user->id;
      $player->team_id = Team::where('name', 'We Showed Up')->first()->id;
      $player->save();

    }
}
