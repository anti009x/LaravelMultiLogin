<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin_Sule',
                'email' => 'sule@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'admin',
            ],
            [
                'name' => 'Operator_Sule',
                'email' => 'operator@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'operator',
            ],
            [
                'name' => 'Karyawan_Sule',
                'email' => 'karyawan@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Pembeli_Sule',
                'email' => 'pembeli@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'pembeli',
            ],
        ];

        foreach ($users as $user) {
            
                DB::table('users')->insert($user);
     
        }

    }
}
