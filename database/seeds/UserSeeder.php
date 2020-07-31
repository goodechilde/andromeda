<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Sean Shoffstall',
            'email' => 'sean@eq8.in',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('super-admin');
        factory(App\User::class, 5)
            ->create()
            ->each(function ($user) {
                $user
                    ->phones()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\Phone::class)
                            ->make()
                    );
                $user
                    ->phones()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\Phone::class)
                            ->make()
                    );
                $user
                    ->addresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\Address::class)
                            ->make()
                    );
                $user
                    ->emailaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\EmailAddress::class)
                            ->make()
                    );
                $user
                    ->emailaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\EmailAddress::class)
                            ->make()
                    );
                $user
                    ->socialmediaaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\SocialMediaAddress::class)
                            ->make()
                    );
                $user
                    ->socialmediaaddresses()
                    ->save(
                        factory(\Goodechilde\CommonContact\Models\SocialMediaAddress::class)
                            ->make()
                    );
                $user->assignRole(\Spatie\Permission\Models\Role::inRandomOrder()->pluck('name')->first());
            })
        ;
    }
}
