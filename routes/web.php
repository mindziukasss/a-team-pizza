<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin'], function (){

   Route::group(['prefix' => 'cheeses'], function (){

       Route::get('/', ['as' => 'app.cheeses.index', 'uses' => 'CheesesController@index']);
       Route::get('/create', ['as' => 'app.cheeses.create', 'uses' => 'CheesesController@create']);
       Route::post('/create', [ 'uses' => 'CheesesController@store']);

       Route::group(['prefix' => '{id}'], function () {

           Route::get('/', ['uses' => 'CheesesController@show']);
           Route::get('/edit', ['as' => 'app.cheeses.edit','uses' => 'CheesesController@edit']);
           Route::post('/edit', [ 'uses' => 'CheesesController@update']);
           Route::delete('/delete', ['as' => 'app.cheeses.destroy', 'uses' => 'CheesesController@destroy']);
       });
   });

    Route::group(['prefix' => 'ingridients'], function () {

        Route::get('/', ['as' => 'app.ingridients.index', 'uses' => 'IngridientsController@index']);
        Route::get('/create', ['as' => 'app.ingridients.create', 'uses' => 'IngridientsController@create']);
        Route::post('/create', ['uses' => 'IngridientsController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [ 'uses' => 'IngridientsController@show']);
            Route::get('/edit', ['as' => 'app.ingridients.edit', 'uses' => 'IngridientsController@edit']);
            Route::post('/edit', [ 'uses' => 'IngridientsController@update']);
            Route::delete('/delete', ['as' => 'app.ingridients.destroy', 'uses' => 'IngridientsController@destroy']);
        });
    });

    Route::group(['prefix' => 'pads'], function () {

        Route::get('/', ['as' => 'app.pads.index', 'uses' => 'PadsController@index']);
        Route::get('/create', ['as' => 'app.pads.create', 'uses' => 'PadsController@create']);
        Route::post('/create', ['uses' => 'PadsController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [ 'uses' => 'PadsController@show']);
            Route::get('/edit', ['as' => 'app.pads.edit', 'uses' => 'PadsController@edit']);
            Route::post('/edit', ['uses' => 'PadsController@update']);
            Route::delete('/delete', ['as' => 'pads.destroy', 'uses' => 'PadsController@destroy']);
        });
    });

    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', ['as' => 'permissions', 'uses' => 'PermissionsController@index']);
        Route::get('/create', ['as' => 'permissions.create', 'uses' => 'PermissionsController@create']);
        Route::post('/store', ['as' => 'permissions.store', 'uses' => 'PermissionsController@store']);
        Route::get('/{id}', ['as' => 'permission.show', 'uses' => 'PermissionsController@show']);
        Route::get('/{id}/edit', ['uses' => 'PermissionsController@edit']);
        Route::post('/{id}/update', ['as' => 'permissions.update', 'uses' => 'PermissionsController@update']);
        Route::delete('/{id}/delete', ['as' => 'permissions.destroy', 'uses' => 'PermissionsController@destroy']);
    });
    Route::group(['prefix' => 'pizzas'], function () {
        Route::get('/', ['as' => 'pizzas', 'uses' => 'PizzasController@index']);
        Route::get('/create', ['as' => 'pizzas.create', 'uses' => 'PizzasController@create']);
        Route::post('/store', ['as' => 'pizzas.store', 'uses' => 'PizzasController@store']);
        Route::get('/{id}', ['as' => 'pizza.show', 'uses' => 'PizzasController@show']);
        Route::get('/{id}/edit', ['uses' => 'PizzasController@edit']);
        Route::post('/{id}/update', ['as' => 'pizzas.update', 'uses' => 'PizzasController@update']);
        Route::delete('/{id}/delete', ['as' => 'pizzas.destroy', 'uses' => 'PizzasController@destroy']);
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['as' => 'roles', 'uses' => 'RolesController@index']);
        Route::get('/create', ['as' => 'roles.create', 'uses' => 'RolesController@create']);
        Route::post('/store', ['as' => 'roles.store', 'uses' => 'RolesController@store']);
        Route::get('/{id}', ['as' => 'role.show', 'uses' => 'RolesController@show']);
        Route::get('/{id}/edit', ['uses' => 'RolesController@edit']);
        Route::post('/{id}/update', ['as' => 'roles.update', 'uses' => 'RolesController@update']);
        Route::delete('/{id}/delete', ['as' => 'roles.destroy', 'uses' => 'RolesController@destroy']);
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'users', 'uses' => 'UsersController@index']);
        Route::get('/create', ['as' => 'users.create', 'uses' => 'UsersController@create']);
        Route::post('/store', ['as' => 'users.store', 'uses' => 'UsersController@store']);
        Route::get('/{id}', ['as' => 'user.show', 'uses' => 'UsersController@show']);
        Route::get('/{id}/edit', ['uses' => 'UsersController@edit']);
        Route::post('/{id}/update', ['as' => 'users.update', 'uses' => 'UsersController@update']);
        Route::delete('/{id}/delete', ['as' => 'users.destroy', 'uses' => 'UsersController@destroy']);
    });
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', ['as' => 'pizzas', 'uses' => 'PizzasController@index']);
    Route::get('/create', ['as' => 'pizzas.create', 'uses' => 'PizzasController@create']);
    Route::post('/store', ['as' => 'pizzas.store', 'uses' => 'PizzasController@store']);
    Route::get('/{id}', ['as' => 'pizza.show', 'uses' => 'PizzasController@show']);
    Route::get('/{id}/edit', ['uses' => 'PizzasController@edit']);
    Route::post('/{id}/update', ['as' => 'pizzas.update', 'uses' => 'PizzasController@update']);
    Route::delete('/{id}/delete', ['as' => 'pizzas.destroy', 'uses' => 'PizzasController@destroy']);


});