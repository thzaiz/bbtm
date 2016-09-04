<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',  'IndexHomeController@index');
Route::get('/services_pool_spa',  'IndexHomeController@services');




Route::auth();


Route::get('/home', 'HomeController@index');


Route::get('/servicesViewAdmin', 'ServicesController@view');
Route::get('/servicesAddAdmin', 'ServicesController@add');
Route::post('/servicesAddInsert', 'ServicesController@addInsert' );

Route::get('/servicesViewAdmin/{id}', 'ServicesController@edit' );
Route::patch('servicesUpdate/{id}', 'ServicesController@update');


Route::get('/productsViewAdmin', 'ProductsController@viewProductsView');
Route::get('/productsAddAdmin', 'ProductsController@addProductsView');
Route::post('/productsAddInsert', 'ProductsController@addProductsInsert' );

Route::get('/productsViewAdmin/{id}', 'ProductsController@editProduct' );
Route::patch('productsUpdate/{id}', 'ProductsController@updateProduct');



Route::get('/teamViewAdmin', 'TeamController@viewTeamView');
Route::get('/teamAddAdmin', 'TeamController@addTeamView');
Route::post('/teamAddInsert', 'TeamController@addTeamInsert' );

Route::get('/teamViewAdmin/{id}', 'TeamController@editTeam' );
Route::patch('teamUpdate/{id}', 'TeamController@updateStaff');

Route::get('/menuViewAdmin', 'MenuController@viewMenuView');
Route::get('/menuAddAdmin', 'MenuController@addMenuView');
Route::post('/menuAddInsert', 'MenuController@addMenuInsert' );

Route::get('/menuViewAdmin/{id}', 'MenuController@editMenu' );
Route::patch('menuUpdate/{id}', 'MenuController@updateMenu');

Route::get('/subMenuViewAdmin/{id}', 'MenuController@editSubMenu' );
Route::patch('subMenuUpdate/{id}', 'MenuController@updateSubMenu');
Route::get('/subMenuAddAdmin/{id}', 'MenuController@addSubMenuView');
Route::post('/subMenuAddInsert/{id}', 'MenuController@addSubMenuInsert' );
/*
\Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
    var_dump($query->sql);
    var_dump($query->bindings);
    var_dump($query->time);
});
*/