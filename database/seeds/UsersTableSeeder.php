<?php

use Illuminate\Database\Seeder;
use App\User as User;
use Carbon\Carbon;

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
            'name' => 'admin',
            'email' => 'admin@prueba-decameron-clef.local',
            'email_verified_at' => now(),
            'password' => bcrypt('Admin.Decameron.1234'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'claudia',
            'email' => 'claudia@prueba-decameron-clef.local',
            'email_verified_at' => now(),
            'password' => bcrypt('Admin.Decameron.1234'),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

