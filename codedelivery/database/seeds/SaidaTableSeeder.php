<?php

use Illuminate\Database\Seeder;

class SaidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeDelivery\Models\Saida::class,6)->create();
    }
}
