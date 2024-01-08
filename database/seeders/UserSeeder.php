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
        collect([
            [
                'name' => 'Tom Cook',
                'email' => 'me@company.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@doe.com',
                'password' => bcrypt('password')
            ]
        ])->each(fn ($user) => User::create($user));
    }
}
