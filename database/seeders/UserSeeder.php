<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('12345678')
        ])->create();

        User::factory()
            ->count(5)
            ->has(Post::factory()->count(10))
            ->create();
    }
}
