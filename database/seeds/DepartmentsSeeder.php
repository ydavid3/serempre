<?php

use Illuminate\Database\Seeder;
use App\models\Departments;

class DepartmentsSeeder extends Seeder
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
                'id' => '5',
                'name' => 'ANTIOQUIA',
            ],

            [
                'id' => '8',
                'name' => 'ATLANTICO',
            ],

            [
                'id' => '11',
                'name' => 'BOGOTA, D.C.',
            ],

            [
                'id' => '13',
                'name' => 'BOLIVAR',
            ],

            [
                'id' => '15',
                'name' => 'BOYACA',
            ],

            [
                'id' => '17',
                'name' => 'CALDAS',
            ],

            [
                'id' => '18',
                'name' => 'CAQUETA',
            ],

            [
                'id' => '19',
                'name' => 'CAUCA',
            ],

            [
                'id' => '20',
                'name' => 'CESAR',
            ],

            [
                'id' => '23',
                'name' => 'CoRDOBA',
            ],

            [
                'id' => '25',
                'name' => 'CUNDINAMARCA',
            ],

            [
                'id' => '27',
                'name' => 'CHOCo',
            ],

            [
                'id' => '41',
                'name' => 'HUILA',
            ],

            [
                'id' => '44',
                'name' => 'LA GUAJIRA',
            ],

            [
                'id' => '47',
                'name' => 'MAGDALENA',
            ],

            [
                'id' => '50',
                'name' => 'META',
            ],

            [
                'id' => '52',
                'name' => 'NARINO',
            ],

            [
                'id' => '54',
                'name' => 'NORTE DE SANTANDER',
            ],

            [
                'id' => '63',
                'name' => 'QUINDIO',
            ],

            [
                'id' => '66',
                'name' => 'RISARALDA',
            ],

            [
                'id' => '68',
                'name' => 'SANTANDER',
            ],

            [
                'id' => '70',
                'name' => 'SUCRE',
            ],

            [
                'id' => '73',
                'name' => 'TOLIMA',
            ],

            [
                'id' => '76',
                'name' => 'VALLE DEL CAUCA',
            ],

            [
                'id' => '81',
                'name' => 'ARAUCA',
            ],

            [
                'id' => '85',
                'name' => 'CASANARE',
            ],

            [
                'id' => '86',
                'name' => 'PUTUMAYO',
            ],

            [
                'id' => '88',
                'name' => 'ARCHIPIELAGO DE SAN ANDRES, PROVIDENCIA Y SANTA CATALINA',
            ],

            [
                'id' => '91',
                'name' => 'AMAZONAS',
            ],

            [
                'id' => '94',
                'name' => 'GUAINIA',
            ],

            [
                'id' => '95',
                'name' => 'GUAVIARE',
            ],

            [
                'id' => '97',
                'name' => 'VAUPES',
            ],

            [
                'id' => '99',
                'name' => 'VICHADA',
            ],
        ];

        return Departments::insert($data);

    }
}
