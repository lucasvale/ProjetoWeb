<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\EntradaRepository;
use CodeDelivery\Models\Entrada;
use CodeDelivery\Validators\EntradaValidator;

/**
 * Class EntradaRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class EntradaRepositoryEloquent extends BaseRepository implements EntradaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Entrada::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
