<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedore;


class ProveedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedore::create([
            'proveedor' =>"RSI",
            'razonSocial' => 'Vender',
            'condicionesPago' => 'Mes',
            'moneda' => 'Dolar',
            'fechaAlta' => 'Hoy',
            'fechaBaja' => 'Algun dia',
        ]);
        Proveedore::create([
            'proveedor' =>"Hope Global",
            'razonSocial' => 'Ser los mejores',
            'condicionesPago' => 'año',
            'moneda' => 'Pesos',
            'fechaAlta' => '09/10/2022',
            'fechaBaja' => 'Algun dia',
        ]);
    }
}
