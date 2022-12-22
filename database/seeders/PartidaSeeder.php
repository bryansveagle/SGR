<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partida;

class PartidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partida::create([
            'producto' =>"Television",
            'Tipo' => 'Pieza',
            'cantidad' => '80',
        ]);
        Partida::create([
            'producto' =>"Laptop",
            'Tipo' => 'Pieza',
            'cantidad' => '5',
        ]);
    }
}
