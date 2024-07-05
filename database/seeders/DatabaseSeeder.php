<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'user_id' => 'U001',
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'active' => '1',
                'role' => 'admin',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 'U002',
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'active' => '1',
                'role' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 'U003',
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'active' => '0',
                'role' => 'user',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        $this->call([
            TableRekeningSeeder::class,
            TablePemberiSeeder::class,
            TableDatagerejaSeeder::class,
            TableAkunSeeder::class,
            // You can add more seeders here
        ]);
    }
}
