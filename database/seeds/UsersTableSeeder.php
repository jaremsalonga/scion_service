<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => app('hash')->make('secretP@ssw0rd'),
            'department' => json_encode(array('department_id' => 'IT','department_name' => 'IT Department')),
            'role' => json_encode(array('role_id' => 'IT','role_name' => 'IT Department')),
        ]);
    }
}
