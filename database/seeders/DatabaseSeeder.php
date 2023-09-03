<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

        DB::table('cursos_categorias')->insert([
            'id_categoria_curso' => 1,
            'categoria_nombre' => 'Diseño Web',
        ]);

        DB::table('cursos_categorias')->insert([
            'id_categoria_curso' => 2,
            'categoria_nombre' => 'Programación Web',
        ]);

        DB::table('cursos_categorias')->insert([
            'id_categoria_curso' => 3,
            'categoria_nombre' => 'Inteligencia Artificial',
        ]);

        DB::table('cursos_categorias')->insert([
            'id_categoria_curso' => 4,
            'categoria_nombre' => 'Full Stack',
        ]);




        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'José Marin de la Fuente',
            'email' => 'jose.marindelafuente@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        
        \App\Models\User::factory(500)->create();
        \App\Models\Curso::factory(200)->create();
    }
}
