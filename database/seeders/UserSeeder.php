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
        //
        User::create([
            'name' => 'Hamdam Syukur',
            'username' => 'admin1',
            'password' => encrypt('admin1'),
            'role' => 'admin'

        ]);
        User::create([
            'name' => 'Irfan Ardi',
            'username' => 'admin2',
            'password' => encrypt('admin2'),
            'role' => 'admin'

        ]);
        User::create([
            'name' => 'Taufiq Mamdah',
            'username' => 'user1',
            'password' => encrypt('user1'),
            'role' => 'user'

        ]);
    }
}
