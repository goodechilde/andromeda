<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 25)->create();

        Permission::create(['name' => 'view products']);
        Permission::create(['name' => 'viewAny products']);
        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'update products']);
        Permission::create(['name' => 'delete products']);

        Role::findByName('super-admin')->givePermissionTo(Permission::all());

        // this can be done as separate statements
        Role::findByName('administrator')->givePermissionTo(Permission::all());

        // or may be done by chaining
        Role::findByName('basic user')->givePermissionTo(['viewAny products', 'view products']);
    }
}
