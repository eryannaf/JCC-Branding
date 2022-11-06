<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'pengajar']);
        Permission::create(['name' => 'siswa']);

        // create roles and assign created permissions
        // this can be done as separate statements
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('admin');
        $role = Role::create(['name' => 'pengajar']);
        $role->givePermissionTo('pengajar');
        $role = Role::create(['name' => 'siswa']);
        $role->givePermissionTo('siswa');
    }
}
