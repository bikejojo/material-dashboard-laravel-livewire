<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Album;
use App\Models\Evento;
use App\Models\Personal;
use App\Models\Producto;
//---------------------
use App\Models\_reg;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => ('secret'),
            'rol' => '0',
            //0 libre 1 ocupado
        ]);

        User::create([
            'name' => 'jorge',
            'email' => 'jorge@material.com',
            'password' => ('secret'),
            'phone' => '79836202',
            'location' => 'Santa Cruz',
            'rol' => '1',

        ]);

        User::create([
            'name' => 'Eduardo',
            'email' => 'eduardo@material.com',
            'password' => ('secret'),
            'phone' => '77066928',
            'location' => 'Beni',
            'rol' => '2',

        ]);

        User::create([
            'name' => 'Belen',
            'email' => 'belen@material.com',
            'password' => ('secret'),
            'phone' => '72687410',
            'location' => 'Tarija',
            'rol' => '3',
        ]);

Personal::create([
    'p'=>'1',
    'Codigo'=>'ADM001',
    'Nombre'=>'Ricardo',
    'Apellido'=>'Martinez',
    'FechaN'=>'2023-05-11',
    'Telefono'=>'775013545',
    'estado' => '0',
]);
Personal::create([
    'p'=>'2',
    'Codigo'=>'ORG001',
    'Nombre'=>'Jorge',
    'Apellido'=>'Cari',
    'FechaN'=>'2022-07-10',
    'Telefono'=>'79836202',
    'estado' => '0',
]);
Personal::create([
    'p'=>'3',
    'Codigo'=>'FOT001',
    'Nombre'=>'Eduardo',
    'Apellido'=>'Araca',
    'FechaN'=>'2022-07-10',
    'Telefono'=>'79836201',
    'estado' => '0',
]);
Personal::create([
    'p'=>'4',
    'Codigo'=>'CLI001',
    'Nombre'=>'Belen',
    'Apellido'=>'Cari',
    'FechaN'=>'2022-12-22',
    'Telefono'=>'73158202',
    'estado' => '2',
]);

Evento::create([
        'e'=>'1',
        'codigo'=>'EVENT001',
        'FechaRegistro'=>'2022-04-12',
        'FechaInicio'=>'2022-05-12',
        'horaInicio'=>'19:09',
        'horaFin'=>'22:09',
        'Ubicacion'=>'Av uruguay calle 9 ',
        'tipo'=>'2',
]);  // 0 PENDIENDTE 1 EJECUTANDO 2 ACABADO
Evento::create([
        'e'=>'2',
        'codigo'=>'EVENT002',
        'FechaRegistro'=>'2022-04-12',
        'FechaInicio'=>'2022-05-12',
        'horaInicio'=>'19:09',
        'horaFin'=>'22:09',
        'Ubicacion'=>'Av uruguay calle 15 ',
        'tipo'=>'1',
]);
/*
Album::create([]);
Album::create([]);

Producto::create([]);
Producto::create([]);
*/
    }
}
