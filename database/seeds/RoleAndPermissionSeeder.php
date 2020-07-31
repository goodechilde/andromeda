<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
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
        Permission::create(['name' => 'update addresses']);
        Permission::create(['name' => 'delete addresses']);
        Permission::create(['name' => 'create addresses']);
        Permission::create(['name' => 'view addresses']);
        Permission::create(['name' => 'viewAny addresses']);
        Permission::create(['name' => 'update phones']);
        Permission::create(['name' => 'delete phones']);
        Permission::create(['name' => 'create phones']);
        Permission::create(['name' => 'view phones']);
        Permission::create(['name' => 'viewAny phones']);
        Permission::create(['name' => 'update emailaddresses']);
        Permission::create(['name' => 'delete emailaddresses']);
        Permission::create(['name' => 'create emailaddresses']);
        Permission::create(['name' => 'view emailaddresses']);
        Permission::create(['name' => 'viewAny emailaddresses']);
        Permission::create(['name' => 'update socialmediaaddresses']);
        Permission::create(['name' => 'delete socialmediaaddresses']);
        Permission::create(['name' => 'create socialmediaaddresses']);
        Permission::create(['name' => 'view socialmediaaddresses']);
        Permission::create(['name' => 'viewAny socialmediaaddresses']);

        // create roles and assign created permissions


        Role::create(['name' => 'super-admin'])->givePermissionTo(Permission::all());

        // this can be done as separate statements
        Role::create(['name' => 'administrator'])->givePermissionTo(Permission::all());

        // or may be done by chaining
        Role::create(['name' => 'basic user'])->givePermissionTo(['viewAny addresses', 'view addresses']);
    }
}
