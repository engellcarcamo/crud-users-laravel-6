<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
            'title' => 'Backend developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'Frontend developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'Fullstack developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'UI developer',
        ]);
    }
}
