<?php

namespace Database\Seeders;

use App\Models\User;
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
        $superadmin = User::create([
            'name'      => 'Agung Wicaksono',
            'email'     => 'wicaksono1404@gmail.com',
            'password'  => bcrypt('123qweasd'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');

        $superadmin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@undangan.io',
            'password'  => bcrypt('123qweasd'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');
    }
}
