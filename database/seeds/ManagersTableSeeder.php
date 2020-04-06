<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Manager;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_manager = Role::where('name', 'manager')->first();

      $manager_user = new User();
      $manager_user->name = 'John O Reilly';
      $manager_user->email = 'johnOReilly@hotmail.com';
      $manager_user->password = bcrypt('manager');
      $manager_user->save();
      $manager_user->roles()->attach($role_manager);

      $manager = new Manager();
      $manager->phone_number = "0879687564";
      $manager->address = "Sebastopol, CA, USA";
      $manager->user_id = $manager_user->id;
      $manager->save();

      $manager_user = new User();
      $manager_user->name = 'Joe';
      $manager_user->email = 'joe01@hotmail.com';
      $manager_user->password = bcrypt('manager');
      $manager_user->save();
      $manager_user->roles()->attach($role_manager);

      $manager = new Manager();
      $manager->phone_number = "0873355761";
      $manager->address = "San Francisco, CA, USA";
      $manager->user_id = $manager_user->id;
      $manager->save();

      $manager_user = new User();
      $manager_user->name = 'Joe';
      $manager_user->email = 'joe@example.com';
      $manager_user->password = bcrypt('manager');
      $manager_user->save();
      $manager_user->roles()->attach($role_manager);

      $manager = new manager();
      $manager->phone_number = "0879687567";
      $manager->address = "23 Fake Str";
      $manager->user_id = $manager_user->id;
      $manager->save();

      $manager_user = new User();
      $manager_user->name = 'Adam';
      $manager_user->email = 'adam@example.com';
      $manager_user->password = bcrypt('manager');
      $manager_user->save();
      $manager_user->roles()->attach($role_manager);

      $manager = new Manager();
      $manager->phone_number ="0864613464";
      $manager->address = rand(1, 100) . " Fake St";
      $manager->user_id = $manager_user->id;
      $manager->save();

      $manager_user = new User();
      $manager_user->name = 'Jade';
      $manager_user->email = 'jade@example.com';
      $manager_user->password = bcrypt('manager');
      $manager_user->save();
      $manager_user->roles()->attach($role_manager);

      $manager = new Manager();
      $manager->phone_number ="0873613464";
      $manager->address = rand(1, 100) . " Fake St";
      $manager->user_id = $manager_user->id;
      $manager->save();

      $manager_user = new User();
      $manager_user->name = 'Alex';
      $manager_user->email = 'alex@example.com';
      $manager_user->password = bcrypt('manager');
      $manager_user->save();
      $manager_user->roles()->attach($role_manager);

      $manager = new Manager();
      $manager->phone_number ="0853613464";
      $manager->address = rand(1, 100) . " Fake St";
      $manager->user_id = $manager_user->id;
      $manager->save();

      $manager_user = new User();
      $manager_user->name = 'Kai';
      $manager_user->email = 'kai@example.com';
      $manager_user->password = bcrypt('manager');
      $manager_user->save();
      $manager_user->roles()->attach($role_manager);

      $manager = new Manager();
      $manager->phone_number ="0869013464";
      $manager->address = rand(1, 100) . " Fake St";
      $manager->user_id = $manager_user->id;
      $manager->save();

    }
}
