<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('cursos')->delete();


        $cursos = array(
            array(
                'owner_id' => '1', 
                'nombre_curso' =>'UML',
                'descripcion' =>'Curso de Modelado para ingenieros'
            )
        );


        DB::table('cursos')->insert($cursos);
    }
}
    