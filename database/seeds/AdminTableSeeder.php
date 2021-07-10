<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'role_id'=>1,
            'email'=>'admin@gmail.com',
            //'phone'=>'01222222',
            'password'=>bcrypt('admin123456'),
        ]);
        DB::table('users')->insert([
            'name'=>'user',
            'role_id'=>2,
            'email'=>'user@gmail.com',
            //'phone'=>'0122222266',
            'password'=>bcrypt('user123456'),
        ]);
    }
}
