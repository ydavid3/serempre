<?php

use Illuminate\Database\Seeder;
use App\models\Users;


class UsersSeeder extends Seeder
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
                'name' => 'Administrador',
                'password' => bcrypt('admin2019'),
                'role' => 1
            ]
        ];

        return Users::insert($data);
    }
}
