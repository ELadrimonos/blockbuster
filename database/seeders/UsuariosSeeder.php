<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $usuario = new Usuario();
            $usuario->nombre = $faker->firstName;
            $usuario->e_mail = $faker->email;
            $usuario->save();
        }
    }
}
