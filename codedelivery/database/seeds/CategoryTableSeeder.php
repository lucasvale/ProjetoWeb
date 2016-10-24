<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeDelivery\Models\Category::class,2)->create()->each(function ($c){

            for ($i=0;$i<=3;$i++){
                $c->products()->save(factory(\CodeDelivery\Models\Product::class)->make());
            }
        });
    }
}