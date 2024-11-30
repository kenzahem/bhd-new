<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RoomType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Administrator',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'firstname' => 'Administrator',
            'lastname' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('room_types')->insert([
            'room_type' => 'Bed Spacer'
        ]);

        DB::table('room_types')->insert([
            'room_type' => 'Apartment'
        ]);

    }
}
