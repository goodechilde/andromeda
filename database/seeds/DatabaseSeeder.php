<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NoteTypeSeeder::class,
            ContactTypeSeeder::class,
            TagTypeSeeder::class,
            PersonTypeSeeder::class,
            TagSeeder::class,
            RoleAndPermissionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
