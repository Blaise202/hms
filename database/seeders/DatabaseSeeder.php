<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Role::create(['name' => 'doctor']);
        Role::create(['name'=> 'nurse']);
        Role::create(['name'=> 'receptionist']);
        Role::create(['name'=> 'cashier']);
        Role::create(['name'=> 'pharmacist']);
        Role::create(['name'=> 'laboratorian']);
        Role::create(['name'=> 'manager']);
        Role::create(['name'=> 'finance']);
        Role::create(['name'=> 'HeadOfClinicalServises']);
        Role::create(['name'=> 'admin']);
        Role::create(['name'=> 'supperAdmin']);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}