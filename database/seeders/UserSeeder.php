<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'atthaya', 'email'      => 'atthaya@example.test', 'password'      => bcrypt('isrami')],
            ['name' => 'isrami', 'email'       => 'isrami@example.test', 'password'       => bcrypt('isrami')],
            ['name' => 'AttayaIsrami', 'email' => 'attayaisrami@example.test', 'password' => bcrypt('isrami')],
        ];
        \App\Models\User::insert($data);
    }
}
