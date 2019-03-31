<?php

use Illuminate\Database\Seeder;
use App\models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'name' => 'Administrador'
            ],
            [
                'name' => 'Cliente'
            ]
        ];

        return Roles::insert($data);

    }
}
