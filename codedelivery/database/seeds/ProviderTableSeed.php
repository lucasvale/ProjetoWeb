<?php

use Illuminate\Database\Seeder;

class ProviderTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeDelivery\Models\Provider::class,2)->create()->each(function ($p){
            for ($i=0;$i<=3;$i++){
                $p->feedstocks()->save(factory(\CodeDelivery\Models\FeedStock::class)->make());
            }
        });
    }
}
