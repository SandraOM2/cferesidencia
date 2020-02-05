<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
        	'descripcion' => 'ACTIVO'
        ]);

        DB::table('estados')->insert([
        	'descripcion' => 'INACTIVO'
        ]);
    }
}
