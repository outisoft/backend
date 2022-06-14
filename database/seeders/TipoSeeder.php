<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = [
            [
                'id'    => 1,
                'name' => 'Casa',
                'description' => 'Casa',
            ],
            [
                'id'    => 2,
                'name' => 'Apartamento',
                'description' => 'Apartamento',
            ],
            [
                'id'    => 3,
                'name' => 'Cuarto',
                'description' => 'Cuarto',
            ],
        ];

        Tipo::insert($tipo);
    }
}
