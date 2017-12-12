<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Simas';
        $user->lname = 'Marcinkevicius';
        $user->username = 'simmy';
        $user->email = 'simas199312@gmail.com';
        $user->password = bcrypt('Slaptikas');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Adminas';
        $admin->lname = 'Administratorius';
        $admin->username = 'admin';
        $admin->email = 'admin@sportuok.com';
        $admin->password = bcrypt('AdminoSlaptas');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
