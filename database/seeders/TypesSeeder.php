<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'type' => 'speed',
            'price' => '5000',
           
        ]);
        DB::table('types')->insert([
            'type' => 'belt',
            'price' => '10000',
           
        ]);
        DB::table('types')->insert([
            'type' => 'red_sign',
            'price' => '15000',
           
        ]);
        DB::table('types')->insert([
            'type' => 'parking',
            'price' => '5000',
           
        ]);
    }
}
