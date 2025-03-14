<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sergio Yucra' ,
            'email' => 'sergio22yucra@gmail.com',
            'password' => bcrypt('11223344'),
            'email_verified_at' => '2024-08-08 00:11:14',
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Mauro' ,
            'email' => 'syucrap@fcpn.edu.bo',
            'password' => bcrypt('11223344'),
            'email_verified_at' => '2024-08-08 00:11:14',
        ]);
    }
}
