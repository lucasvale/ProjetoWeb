<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Provider extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'phone',
        'address',
        'city',
        'state',
        'zipcode',
        'email',
        'fantasia',
        'cnpj'

    ];

    public function feedstocks(){
        return $this->hasMany(FeedStock::class);
    }
}

