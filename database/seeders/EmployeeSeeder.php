<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'Full_name' => 'Fadi',
            'Phone_Number' => '0923142319',
            'National_Number' => '12314352341',
            'Date_of_birth' => '1998/1/1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('Employee');
        User::create([
            'Full_name' => 'shadi',
            'Phone_Number' => '0924263452',
            'National_Number' => '11111118911',
            'Date_of_birth' => '1998/1/1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('Employee');
        User::create([
            'Full_name' => 'malek',
            'Phone_Number' => '0992949249',
            'National_Number' => '22222678911',
            'Date_of_birth' => '1998/1/1',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->assignRole('Employee');
    }
}
