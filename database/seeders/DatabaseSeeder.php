<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('password'),
            ],
        ]);        

        Booking::factory()->createMany([
            [
                'user_id' => 1,
                'name' => 'Admin',
                'phone' => '1234567890',
                'email' => 'admin@gmail.com',
                'service' => 'Service 1',
                'date' => '2021-12-31',
                'time' => '09:00', 
                'notes' => 'Notes 1',
                'status' => 'pending',
            ], 
            [
                'user_id' => 2,
                'name' => 'User',
                'phone' => '0987654321',
                'email' => 'user@gmail.com',
                'service' => 'Service 2',
                'date' => '2021-12-31',
                'time' => '10:00',
                'notes' => 'Notes 2',
                'status' => 'approved',
            ],
            [
                'user_id' => 1,
                'name' => 'Admin',
                'phone' => '1234567890',
                'email' => 'admin@gmial.com',
                'service' => 'Service 3',
                'date' => '2021-12-31',
                'time' => '11:00',
                'notes' => 'Notes 3',
                'status' => 'rejected',
            ], 
            [
                'user_id' => 2,
                'name' => 'johon',
                'phone' => '0987654321',
                'email' => 'johon@gmail.com',
                'service' => 'Service 4',
                'date' => '2021-12-31',
                'time' => '12:00',
                'notes' => 'Notes 4',
                'status' => 'pending',
            ]
        ]);
    }
}
