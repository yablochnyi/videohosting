<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'admin@admin.com',
             'password' => Hash::make('admin')
         ]);
        \App\Models\User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'admin@ain.com',
            'password' => Hash::make('admin')
        ]);
         Channel::factory(20)->create();
    }
}
