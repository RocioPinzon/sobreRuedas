<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name' => 'admin',  'display_name' => 'administrador']);
        //$role2=Role::create(['name' => 'dev', 'display_name' => 'desarrollador']);
        $role2=Role::create(['name' => 'inv',  'display_name' => 'invitado']);

        Permission::create(['name' => 'perfil'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'projects.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'projects.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'projects.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'contacta'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.list_users'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.list_projects'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.list-permisos'])->syncRoles([$role1]);

    }
}
