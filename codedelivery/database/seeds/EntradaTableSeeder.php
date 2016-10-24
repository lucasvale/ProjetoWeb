<?php

use Illuminate\Database\Seeder;

class EntradaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeDelivery\Models\Entrada::class,6)->create();
    }
}
