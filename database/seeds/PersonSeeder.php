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
        factory(App\Person::class, 500)
            ->create()
            ->each(function ($person) {
                $person
                    ->phones()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\Phone::class)
                            ->make()
                    );
                $person
                    ->phones()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\Phone::class)
                            ->make()
                    );
                $person
                    ->addresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\Address::class)
                            ->make()
                    );
                $person
                    ->emailaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\EmailAddress::class)
                            ->make()
                    );
                $person
                    ->emailaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\EmailAddress::class)
                            ->make()
                    );
                $person
                    ->socialmediaaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\SocialMediaAddress::class)
                            ->make()
                    );
                $person
                    ->socialmediaaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\SocialMediaAddress::class)
                            ->make()
                    );
                $person
                    ->notes()
                    ->save(
                        factory(\Goodechilde\GcNotes\Models\Note::class)
                            ->make()
                    );
            });
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
