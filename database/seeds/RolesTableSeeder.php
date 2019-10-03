<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\Role::create([
            'name' => "super_admin",
            'display_name' => "Super Admin",
            "description" => "Can do anything if he want"

        ]);

        $user = \App\Role::create([
            'name' => "user",
            'display_name' => "User",
            "description" => "Can not do anything if he want"

        ]);
    }
}
