<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductType::class)->create(['name' => 'service']);
        factory(App\ProductType::class)->create(['name' => 'widget']);
        factory(App\ProductType::class)->create(['name' => 'perishable']);
        factory(App\ProductType::class)->create(['name' => 'stable']);
        factory(App\ProductType::class)->create(['name' => 'service']);

        Permission::create(['name' => 'view product_types']);
        Permission::create(['name' => 'viewAny product_types']);
        Permission::create(['name' => 'create product_types']);
        Permission::create(['name' => 'update product_types']);
        Permission::create(['name' => 'delete product_types']);

        Role::findByName('super-admin')->givePermissionTo(Permission::all());

        // this can be done as separate statements
        Role::findByName('administrator')->givePermissionTo(Permission::all());

        // or may be done by chaining
        Role::findByName('basic user')->givePermissionTo(['viewAny product_types', 'view product_types']);
    }
}
