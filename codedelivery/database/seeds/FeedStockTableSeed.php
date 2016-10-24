<?php

use Illuminate\Database\Seeder;

class FeedStockTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeDelivery\Models\FeedStock::class,6)->create();
    }
}
