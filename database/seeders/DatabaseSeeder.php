<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->seedUsers();
        \App\Models\User::factory(10)->create();
        //\App\Models\Project::factory(10)->create();
        $this->seedRandomRelationRolesUser();
       
    }

    private function seedUsers()
    {
        \App\Models\User::factory(10)->create();
    }

    private function seedRoles()
    {
        $roles = [
            "admin"=>"administrador",
            "guest"=>"invitado"
        ];

        foreach ($roles as $name => $display_name) {
            Role::create(compact('name','display_name'));
        }

    }

    private function seedRandomRelationRolesUser()
    {
        $roles = Role::where('name', '<>', 'admin')->get();
        
        $users = \App\Models\User::all();

        foreach ($users as $user) {
            $user->roles()->attach($roles->random());
        }
    }
}

