<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Adminov',
            'email' => 'admin@admin.com',
            'phone' => '+998901234567',
            'password' => Hash::make('admin'),
        ]);

        $admin->roles()->attach(1);

        factory(User::class, 10)->create()->each(function ($user) {
            $user->roles()->attach(Role::find(2));
        });
    }
}
