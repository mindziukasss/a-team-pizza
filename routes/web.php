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

    Route::group(['prefix' => 'ingredients'], function () {

        Route::get('/', ['as' => 'app.ingredients.index', 'uses' => 'IngredientsController@index']);
        Route::get('/create', ['as' => 'app.ingredients.create', 'uses' => 'IngredientsController@create']);
        Route::post('/create', ['uses' => 'IngredientsController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [ 'uses' => 'IngredientsController@show']);
            Route::get('/edit', ['as' => 'app.ingredients.edit', 'uses' => 'IngredientsController@edit']);
            Route::post('/edit', [ 'uses' => 'IngredientsController@update']);
            Route::delete('/delete', ['as' => 'app.ingredients.destroy', 'uses' => 'IngredientsController@destroy']);
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
            Route::delete('/delete', ['as' => 'app.pads.destroy', 'uses' => 'PadsController@destroy']);
        });
    });

    Route::group(['prefix' => 'permissions'], function () {

        Route::get('/', ['uses' => 'PermissionsController@index']);
        Route::get('/create', ['as' => 'app.permissions.create', 'uses' => 'PermissionsController@create']);
        Route::post('/create', ['uses' => 'PermissionsController@store']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'PermissionsController@show']);
        	Route::get('/edit', ['as' => 'app.permissions.edit', 'uses' => 'PermissionsController@edit']);
        	Route::post('/edit', ['uses' => 'PermissionsController@update']);
        	Route::delete('/delete', ['as' => 'app.permissions.destroy', 'uses' => 'PermissionsController@destroy']);
    	});
    });
    Route::group(['prefix' => 'pizzas'], function () {

        Route::get('/', ['uses' => 'PizzasController@index']);
        Route::get('/create', ['as' => 'app.pizzas.create', 'uses' => 'PizzasController@create']);
        Route::post('/create', ['uses' => 'PizzasController@store']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'PizzasController@show']);
        	Route::get('/edit', ['as' => 'app.pizzas.edit','uses' => 'PizzasController@edit']);
        	Route::post('/edit', [ 'uses' => 'PizzasController@update']);
        	Route::delete('/delete', ['as' => 'app.pizzas.destroy', 'uses' => 'PizzasController@destroy']);
    	});
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['uses' => 'RolesController@index']);
        Route::get('/create', ['as' => 'app.roles.create', 'uses' => 'RolesController@create']);
        Route::post('/create', ['uses' => 'RolesController@store']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'RolesController@show']);
        	Route::get('/edit', ['as' => 'app.roles.edit', 'uses' => 'RolesController@edit']);
        	Route::post('/edit', [ 'uses' => 'RolesController@update']);
        	Route::delete('/delete', ['as' => 'app.roles.destroy', 'uses' => 'RolesController@destroy']);
        });
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['uses' => 'UsersController@index']);
        Route::get('/create', ['as' => 'app.users.create', 'uses' => 'UsersController@create']);
        Route::post('/create', ['uses' => 'UsersController@store']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'UsersController@show']);
        	Route::get('/edit', ['as' => 'app.users.edit','uses' => 'UsersController@edit']);
        	Route::post('/edit', [ 'uses' => 'UsersController@update']);
        	Route::delete('/delete', ['as' => 'app.users.destroy', 'uses' => 'UsersController@destroy']);
    	});
    });
});

Route::group(['prefix' => 'pizzas'], function () {

    Route::get('/', ['uses' => 'PizzasController@index']);
    Route::get('/create', ['as' => 'app.pizzas.create', 'uses' => 'PizzasController@create']);
	Route::post('/create', ['uses' => 'PizzasController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'PizzasController@show']);
        Route::get('/edit', ['as' => 'app.pizzas.edit', 'uses' => 'PizzasController@edit']);
        Route::post('/edit', [ 'uses' => 'PizzasController@update']);
        Route::delete('/delete', ['as' => 'app.pizzas.destroy', 'uses' => 'PizzasController@destroy']);
    });
});