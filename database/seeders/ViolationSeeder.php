<?php

namespace Database\Seeders;

use App\Models\Violation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViolationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Violation::factory()->times(count: 100)->create();
    }
}
