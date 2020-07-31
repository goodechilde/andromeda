<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Person::class, 25)->create();

        Permission::create(['name' => 'view people']);
        Permission::create(['name' => 'viewAny people']);
        Permission::create(['name' => 'create people']);
        Permission::create(['name' => 'update people']);
        Permission::create(['name' => 'delete people']);

        Role::findByName('super-admin')->givePermissionTo(Permission::all());

        // this can be done as separate statements
        Role::findByName('administrator')->givePermissionTo(Permission::all());

        // or may be done by chaining
        Role::findByName('basic user')->givePermissionTo(['viewAny people', 'view people']);
    }
}
