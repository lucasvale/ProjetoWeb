<?php

namespace CodeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'CodeDelivery\Repositories\CategoryRepository',
            'CodeDelivery\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\ClientRepository',
            'CodeDelivery\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\OrderRepository',
            'CodeDelivery\Repositories\OrderRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\OrderItemRepository',
            'CodeDelivery\Repositories\OrderItemRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\ProductRepository',
            'CodeDelivery\Repositories\ProductRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\UserRepository',
            'CodeDelivery\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\CupomRepository',
            'CodeDelivery\Repositories\CupomRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\EmployeeRepository',
            'CodeDelivery\Repositories\EmployeeRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\ProviderRepository',
            'CodeDelivery\Repositories\ProviderRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\FeedStockRepository',
            'CodeDelivery\Repositories\FeedStockRepositoryEloquent'
        );
        $this->app->bind(
            'CodeDelivery\Repositories\SaidaRepository',
            'CodeDelivery\Repositories\SaidaRepositoryEloquent'
        );
        $this->app->bind(
            'CodeDelivery\Repositories\EntradaRepository',
            'CodeDelivery\Repositories\EntradaRepositoryEloquent'
        );


    }
}
