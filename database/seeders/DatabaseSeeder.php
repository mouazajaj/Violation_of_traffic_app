<?php

namespace Database\Seeders;

use App\Models\Violation;
use Database\Seeders\CarSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\TypesSeeder;
use Database\Seeders\EmployeeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            TypesSeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            EmployeeSeeder::class,
            CarSeeder::class,
            ViolationSeeder::class

        ]);
    }
}
