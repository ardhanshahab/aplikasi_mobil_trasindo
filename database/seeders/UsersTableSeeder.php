<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@rentmob.com',
            'alamat' => 'Bandung',
            'notelp' => '08123456789',
            'nosim' => '0987654345678',
            'role' => 'admin',
            'password'  => bcrypt('admin')
    ]);
    }
}
