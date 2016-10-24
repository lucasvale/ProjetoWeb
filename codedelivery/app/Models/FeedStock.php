<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class FeedStock extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'provider_id','name','description','manufactdate','expiratedate','qtd','price','type','lote'

    ];

    public function category(){
        return $this->belongsTo(Provider::class);
    }

}