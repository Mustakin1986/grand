<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LoginRegister;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         $admin = new LoginRegister();
         $admin->name ='admin';
         $admin->email='admin@gmail.com';
         $admin->password = bcrypt(123);
         $admin->save();
    }
}
