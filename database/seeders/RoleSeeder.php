<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrador',
                'description' => 'Administrador de la aplicación'
            ],
            [
                'name' => 'creator',
                'display_name' => 'Creador',
                'description' => 'Puede crear post y modificarlos mientras estén en modo draft'
            ],
            [
                'name' => 'editor',
                'display_name' => 'editor',
                'description' => 'Puede editar un post solo si está en modo pending'
            ],
            [
                'name' => 'validator',
                'display_name' => 'Verificador',
                'description' => 'Puede cambiar el estado de un post de pending a published'
            ],
            [
                'name' => 'eraser',
                'display_name' => 'Eliminador',
                'description' => 'puede borrar un post en cualquier mommento'
            ],
            [
                'name' => 'reader',
                'display_name' => 'Lector',
                'description' => 'solo puede acceder al listado de los posts y a ccada uno de ellos de manera individual'
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
