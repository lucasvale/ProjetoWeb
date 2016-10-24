<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\SaidaRepository;
use CodeDelivery\Models\Saida;
use CodeDelivery\Validators\SaidaValidator;

/**
 * Class SaidaRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class SaidaRepositoryEloquent extends BaseRepository implements SaidaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Saida::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
