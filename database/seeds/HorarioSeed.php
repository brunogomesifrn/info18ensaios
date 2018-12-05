<?php

use Illuminate\Database\Seeder;

class HorarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert(['horario' => '18']);
        DB::table('horarios')->insert(['horario' => '19']);
        DB::table('horarios')->insert(['horario' => '20']);
        DB::table('horarios')->insert(['horario' => '21']);
        DB::table('horarios')->insert(['horario' => '22']);
        DB::table('horarios')->insert(['horario' => '23']);
        DB::table('horarios')->insert(['horario' => '00']);
    }
}
