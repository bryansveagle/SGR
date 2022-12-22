<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Usuario']);
        $role3 = Role::create(['name' => 'Cotizador']);
        $role4 = Role::create(['name' => 'Aprobador']);


        Permission::create(['name' => 'cotizacione.index'])->syncRoles([$role1,  $role3, $role4 ]);
        Permission::create(['name' => 'cotizacione.create'])->syncRoles([$role1, $role3, $role4 ]);
        Permission::create(['name' => 'cotizacione.edit'])->syncRoles([$role1, $role3, $role4 ]);
        Permission::create(['name' => 'cotizacione.destroy'])->syncRoles([$role1, $role3, $role4 ]);

        Permission::create(['name' => 'proveedore.index'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'proveedore.create'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'proveedore.edit'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'proveedore.destroy'])->syncRoles([$role1, $role4]);

        Permission::create(['name' => 'requisicione.index'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'requisicione.create'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'requisicione.edit'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'requisicione.destroy'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'partida.index'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'partida.create'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'partida.edit'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'partida.destroy'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'user.index'])->syncRoles([$role1, ]);
        Permission::create(['name' => 'user.create'])->syncRoles([$role1, ]);
        Permission::create(['name' => 'user.edit'])->syncRoles([$role1, ]);
        Permission::create(['name' => 'user.destroy'])->syncRoles([$role1, ]);

        Permission::create(['name' => 'eliminar'])->syncRoles([$role1  ]);
        Permission::create(['name' => 'cotizacione'])->syncRoles([$role1, $role3  ]);
        Permission::create(['name' => 'aprobador'])->syncRoles([$role1, $role4  ]);


    }
}
