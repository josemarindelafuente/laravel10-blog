<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users_roles')->insert([
            'id_user_role' => 1,
            'user_role' => 'Administrador',
        ]);

        DB::table('users_roles')->insert([
            'id_user_role' => 2,
            'user_role' => 'Editor',
        ]);

        
        \App\Models\User::factory(500)->create();
        \App\Models\Curso::factory(200)->create();
    }
}
