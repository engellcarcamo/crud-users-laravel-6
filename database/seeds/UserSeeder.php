<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'engels carcamo',
            'email' => 'engelscarcamo59@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'snyder carcamo',
            'email' => 'engelscarcamo59@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
