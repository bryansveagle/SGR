<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>"Administrator",
            'email' => 'EagleTlaxcalaMexico@eagletlax.com',
            'aprobador' => 'bryan.salgado@eagletlax.com',
            'password' => bcrypt('Eagle123$')
        ])->assignRole('Admin');

        User::create([
            'name' =>"Bryan",
            'email' => 'bryan.salgado@eagletlax.com',
            'aprobador' => 'yesenia.polvo@eagletlax.com',

            'password' => bcrypt('Eagle123$')
        ])->assignRole('Admin');

        User::create([
            'name' =>"Guest",
            'email' => 'sin.permisos@eagletlax.com',
            'aprobador' => 'bryan.salgado@eagletlax.com',
            'password' => bcrypt('Eagle123$')
        ])->assignRole('Usuario');

        User::create([
            'name' =>"Pedro",
            'email' => 'pedro.sola@eagletlax.com',
            'aprobador' => 'yesenia.polvo@eagletlax.com',

            'password' => bcrypt('#Welcome')
        ])->assignRole('Usuario');

        User::create([
            'name' =>"Juan",
            'email' => 'juan.delrazo@eagletlax.com',
            'aprobador' => 'yahaira.moreno@eagletlax.com',

            'password' => bcrypt('Eagle123$')
        ])->assignRole('Cotizador');

        User::create([
            'name' =>"Yahaira",
            'email' => 'yahaira.moreno@eagletlax.com',
            'aprobador' => 'yahaira.moreno@eagletlax.com',

            'password' => bcrypt('Eagle123$')
        ])->assignRole('Aprobador');

        User::create([
            'name' =>"Yessenia",
            'email' => 'yesenia.polvo@eagletlax.com',
            'aprobador' => 'hipolito.manoalt@eagletlax.com',

            'password' => bcrypt('Eagle123$')
        ])->assignRole('Admin');

        User::create([
            'name' =>"Giovanni",
            'email' => 'giovanni.arroyo@eagletlax.com',
            'aprobador' => 'yesenia.polvo@eagletlax.com',

            'password' => bcrypt('Eagle123$')
        ])->assignRole('Admin');

        User::factory(5)->create();
    }
}
