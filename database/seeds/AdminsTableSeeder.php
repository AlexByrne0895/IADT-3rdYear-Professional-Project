<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();

      $admin_user = new User();
      $admin_user->name = 'Kenn Donnell';
      $admin_user->email = 'KennDonnell@hotmail.com';
      $admin_user->password = bcrypt('admin');
      $admin_user->save();
      $admin_user->roles()->attach($role_admin);

      $admin = new Admin();
      $admin->user_id = $admin_user->id;
      $admin->save();

      $admin_user = new User();
      $admin_user->name = 'Kathy';
      $admin_user->email = 'Kathy@example.com';
      $admin_user->password = bcrypt('admin');
      $admin_user->save();
      $admin_user->roles()->attach($role_admin);

      $admin = new Admin();
      $admin->user_id = $admin_user->id;
      $admin->save();

      $admin_user = new User();
      $admin_user->name = 'Mary Anne';
      $admin_user->email = 'maryAnn@hotmail.com';
      $admin_user->password = bcrypt('admin');
      $admin_user->save();
      $admin_user->roles()->attach($role_admin);

      $admin = new Admin();
      $admin->user_id = $admin_user->id;
      $admin->save();
    }
}
