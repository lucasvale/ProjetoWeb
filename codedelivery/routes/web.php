<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','HomeController@principal');

Auth::routes();

Route::get('/home',['middleware'=>'checkclient:client','uses'=>'HomeController@index']);


Route::group(['prefix'=>'admin','middleware'=>'auth.checkrole:admin','as'=>'admin.'], function (){


    Route::group(['prefix'=>'categories','as'=>'categories.'],function (){
        Route::get('',['as'=>'index','uses'=>'CategoriesController@index']);
        Route::get('create',['as'=>'create','uses'=>'CategoriesController@create']);
        Route::post('store',['as'=>'store','uses'=>'CategoriesController@store']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'CategoriesController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'CategoriesController@update']);
    });

    Route::group(['prefix'=>'products','as'=>'products.'],function (){
        Route::get('',['as'=>'index','uses'=>'ProductsController@index']);
        Route::get('create',['as'=>'create','uses'=>'ProductsController@create']);
        //Route::get('description/{id}',['as'=>'description','uses'=>'ProductsController@description']);
        Route::post('store',['as'=>'store','uses'=>'ProductsController@store']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'ProductsController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'ProductsController@update']);
        Route::get('delete/{id}',['as'=>'destroy','uses'=>'ProductsController@destroy']);
    });

    Route::group(['prefix'=>'clients','as'=>'clients.'],function (){
        Route::get('',['as'=>'index','uses'=>'ClientsController@index']);
        Route::get('create',['as'=>'create','uses'=>'ClientsController@create']);
        Route::post('store',['as'=>'store','uses'=>'ClientsController@store']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'ClientsController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'ClientsController@update']);
    });

    Route::group(['prefix'=>'orders','as'=>'orders.'],function (){
        Route::get('',['as'=>'index','uses'=>'OrdersController@index']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'OrdersController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'OrdersController@update']);
    });

    Route::group(['prefix'=>'cupoms','as'=>'cupoms.'],function (){
        Route::get('',['as'=>'index','uses'=>'CupomsController@index']);
        Route::get('edit/{id}',['as'=>'edit','uses'=>'CupomsController@edit']);
        Route::post('update/{id}',['as'=>'update','uses'=>'CupomsController@update']);
        Route::post('store',['as'=>'store','uses'=>'CupomsController@store']);
        Route::get('create',['as'=>'create','uses'=>'CupomsController@create']);
    });


    Route::group(['prefix'=>'barkery','as'=>'barkery.'],function(){
        Route::group(['prefix'=>'rh','as'=>'rh.'],function (){
            Route::get('',['as'=>'index','uses'=>'ResourcesController@index']);
            Route::get('create',['as'=>'create','uses'=>'ResourcesController@create']);
            Route::post('store',['as'=>'store','uses'=>'ResourcesController@store']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'ResourcesController@edit']);
            Route::post('update/{id}',['as'=>'update','uses'=>'ResourcesController@update']);
        });
        Route::group(['prefix'=>'stock','as'=>'stock.'],function (){
            Route::get('',['as'=>'index','uses'=>'StockController@index']);
            Route::get('create',['as'=>'create','uses'=>'StockController@create']);
            Route::post('store',['as'=>'store','uses'=>'StockController@store']);
            Route::get('reduce/{id}',['as'=>'reduce','uses'=>'StockController@reduce']);
            Route::post('spent/{id}',['as'=>'spent','uses'=>'StockController@spent']);
            Route::get('add/{id}',['as'=>'add','uses'=>'StockController@add']);
            Route::post('replacement/{id}',['as'=>'replacement','uses'=>'StockController@replacement']);
            Route::get('edit/{id}',['as'=>'edit','uses'=>'StockController@edit']);
            Route::post('update/{id}',['as'=>'update','uses'=>'StockController@update']);
        });
        Route::group(['prefix'=>'production','as'=>'production.'],function (){
            Route::get('',['as'=>'index','uses'=>'ProductionController@index']);
        });
        Route::group(['prefix'=>'finances','as'=>'finances.'],function (){
            Route::get('',['as'=>'index','uses'=>'FinancesController@index']);
            Route::get('createInput',['as'=>'createInput','uses'=>'FinancesController@createInput']);
            Route::post('storeInput',['as'=>'storeInput','uses'=>'FinancesController@storeInput']);
            Route::get('createOutput',['as'=>'createOutput','uses'=>'FinancesController@createOutput']);
            Route::post('storeOutput',['as'=>'storeOutput','uses'=>'FinancesController@storeOutput']);
            Route::get('editInput/{id}',['as'=>'editInput','uses'=>'FinancesController@editInput']);
            Route::post('updateInput/{id}',['as'=>'updateInput','uses'=>'FinancesController@updateInput']);
            Route::get('editOutput/{id}',['as'=>'editOutput','uses'=>'FinancesController@editOutput']);
            Route::post('updateOutput/{id}',['as'=>'updateOutput','uses'=>'FinancesController@updateOutput']);
            Route::get('deleteInput/{id}',['as'=>'destroyInput','uses'=>'FinancesController@destroyInput']);
            Route::get('deleteOutput/{id}',['as'=>'destroyOutput','uses'=>'FinancesController@destroyOutput']);
        });
        Route::group(['prefix'=>'sales','as'=>'sales.'],function (){
            Route::get('',['as'=>'index','uses'=>'SalesController@index']);
        });

    });

});

Route::group(['prefix'=>'customer','middleware'=>'auth.checkrole:client','as'=>'customer.'], function (){

    Route::get('order',['as'=>'order.index','uses'=>'CheckoutController@index']);
    Route::get('order/create',['as'=>'order.create','uses'=>'CheckoutController@create']);
    Route::post('order/store',['as'=>'order.store','uses'=>'CheckoutController@store']);
    Route::get('products/description/{id}',['as'=>'products.description','uses'=>'ProductsController@description']);
    Route::get('categories/description/{id}',['as'=>'categories.description','uses'=>'CategoriesController@description']);
});

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::get('profile','ClientsController@profile');
Route::post('profile','ClientsController@update_avatar');

