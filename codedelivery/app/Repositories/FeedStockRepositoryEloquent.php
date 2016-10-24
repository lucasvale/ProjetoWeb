<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\FeedStockRepository;
use CodeDelivery\Models\FeedStock;
use CodeDelivery\Validators\FeedStockValidator;

/**
 * Class FeedStockRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class FeedStockRepositoryEloquent extends BaseRepository implements FeedStockRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return FeedStock::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
