<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductOption::class, 25)->create();

        Permission::create(['name' => 'view product_options']);
        Permission::create(['name' => 'viewAny product_options']);
        Permission::create(['name' => 'create product_options']);
        Permission::create(['name' => 'update product_options']);
        Permission::create(['name' => 'delete product_options']);

        Role::findByName('super-admin')->givePermissionTo(Permission::all());

        // this can be done as separate statements
        Role::findByName('administrator')->givePermissionTo(Permission::all());

        // or may be done by chaining
        Role::findByName('basic user')->givePermissionTo(['viewAny product_options', 'view product_options']);
    }
}
