<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'admin majapahits',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'user majapahits',
            'level' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'remember_token' => Str::random(60),
        ]);
    }
}
