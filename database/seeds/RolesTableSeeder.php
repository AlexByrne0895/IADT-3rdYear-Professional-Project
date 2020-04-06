user<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->description = 'An Administrator';
        $admin->save();

        $manager = new Role();
        $manager->name = 'manager';
        $manager->description = 'A Manager';
        $manager->save();

        $player = new Role();
        $player->name = 'player';
        $player->description = 'A Player';
        $player->save();
    }
}
