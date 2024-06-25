<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Criar o usuário administrador com um e-mail específico
         User::factory()->create([
            'role_id' => 3,
            'name' => "Admin3 User",
            "email" => "admin3@teste.com"
        ]);

        // Criar outros usuários com e-mails únicos
        User::factory()->count(10)->create();
    }
}
