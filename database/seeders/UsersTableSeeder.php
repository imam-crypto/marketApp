<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Seeder;

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
            'full_name'     => 'prabs admin',
            'username'      => 'prabs',
            'email'         => 'prabs@gmail.com',
            'password'      => Hash::make('prabs'),
            'role'          => 'admin',
            'status'        => 'active'
        ]);
        DB::table('users')->insert([
            'full_name'     => 'imam',
            'username'      => 'imam',
            'email'         => 'imam@gmail.com',
            'password'      => Hash::make('imam'),
            'role'          => 'vendor',
            'status'        => 'active'
        ]);
        DB::table('users')->insert([
            'full_name'     => 'ozos',
            'username'      => 'ozos',
            'email'         => 'ozos@gmail.com',
            'password'      => Hash::make('ozos'),
            'role'          => 'customer',
            'status'        => 'active'
        ]);
    }
}
