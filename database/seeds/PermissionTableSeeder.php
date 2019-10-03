<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $per = \App\Permission::create([
            'name' => "create-post",
            'display_name' => "Create Post",
            'description' => "With per you can create post"
        ]);
        $per2 = \App\Permission::create([
            'name' => "update-post",
            'display_name' => "Update Post",
            'description' => "With per you can update post"
        ]);
        $per3 = \App\Permission::create([
            'name' => "destroy-post",
            'display_name' => "Destroy Post",
            'description' => "With per you can destroy post"
        ]);
    }
}
