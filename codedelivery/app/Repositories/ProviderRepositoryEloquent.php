<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\ProviderRepository;
use CodeDelivery\Models\Provider;
use CodeDelivery\Validators\ProviderValidator;

/**
 * Class ProviderRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class ProviderRepositoryEloquent extends BaseRepository implements ProviderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Provider::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
