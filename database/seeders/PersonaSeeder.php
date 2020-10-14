<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach (range(1,100) as $key => $value) {
        # code...
        Persona::create([
          'nombres' => $faker->name,
          'email' => $faker->email,
          'sexo' => ['Masculino','Femenino'][rand(0,1)],
          'pais' => $faker->country,
          'ciudad' => $faker->city,
          'telefono' => $faker->phoneNumber,
          'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now')
        ]);
      }
    }
}
