<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entrada extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'date','name','value','description'
    ];

}
