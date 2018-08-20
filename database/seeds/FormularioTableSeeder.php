<?php

use Illuminate\Database\Seeder;
use App\Formulario;

class FormularioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Formulario::class, 30)->create();
    }
}
