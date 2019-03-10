<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);


        factory(User::class)->create([
            'email'   => 'super_admin@gmail.com',
            'role_id' => 1,
        ]);
        factory(User::class)->create([
            'email'   => 'admin@gmail.com',
            'role_id' => 2,
        ]);
        factory(User::class)->create([
            'email'   => 'user@gmail.com',
            'role_id' => 3,
        ]);

        factory(User::class, 4)->create(['role_id' => 2]);
        factory(User::class, 43)->create(['role_id' => 3]);
    }
}
