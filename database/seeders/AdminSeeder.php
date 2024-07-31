<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Steve',
            'username' => 'captain',
            'password' => bcrypt('marvel'),
        ]);
    }
}
