<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name'=> 'Admin 1',
            'email'=> 'admin1@admin.com',
            'password' => Hash::make('Password'),
        ]);
        $user->attachRole('admin');
    }
}
