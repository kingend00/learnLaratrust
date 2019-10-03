<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\User::create([
            'name' => 'super admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('admin')

        ]);

        $user = \App\User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('hoang123')

        ]);
        $superAdmin->attachRole('super_admin');
        $user->attachRole('user');
    }
}
