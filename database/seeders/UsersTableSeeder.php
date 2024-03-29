<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              => 'Admin Admin',
            'email'             => 'admin@argon.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('secret'),
            'role'              => '1',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        DB::table('users')->insert([
            'name'              => 'User',
            'email'             => 'user@user.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('secret'),
            'role'              => '0',
            'status'            => 1,
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
