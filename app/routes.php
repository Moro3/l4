<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('phpinfo', function()
{
    ob_start();
    
    $var_env = 'app.app_env';
    $info = 'Переменная окружения "'.$var_env.'": ';
    $info .= var_dump(Config::get($var_env));
    $info .= '<br>';
    phpinfo();
    $info .= ob_get_contents();
    ob_get_clean();
    
    return $info;
});


Route::get('/', function()
{
	
	$title = 'Приветствие Laravel 4';
	return View::make('users.hello')
		->with('title', $title);
});

Route::get('main', function()
{
	$title = 'Разработка на Laravel 4';
	return View::make('users.main')
			->with('title', $title);
});


Route::get('adminka/{name?}', function($name = null)
{
	
	return 'Маршрут adminka/'.$name;
});

Route::get('subcontroller/{name?}',	
	array('uses' => 'AdminGoodsController@index')
);
Route::get('controller/{name?}',	
	array('uses' => 'UserGoodsController@index')
);

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */


//Route::get('goods', array('as' => 'agoods', 'GoodsController@getCreate'));

//Route::match(array('GET', 'POST'), 'goods', array('as' => 'goods', 'uses' => 'GoodsController@getCreate'));

$adminPrefix = Config::get('dev.prefix');

Route::group(array('prefix' => $adminPrefix), function() use($adminPrefix)
{

    $adminControllerPrefix = Config::get('dev.controllerPrefix.admin');

    # enter admin panel
    Route::get('/', array ('as' => $adminPrefix, 'uses' => 'AdminController@index'));

    //$adminPrefix = Config::get('admin.prefix');
    # goods Management
    Route::get('goods', array ('as' => $adminPrefix.'.goods', 'uses' => $adminControllerPrefix.'GoodsController@index'));

    Route::get('goods/create', array ('as' => $adminPrefix.'.goods.create', 'uses' => $adminControllerPrefix.'GoodsController@getCreate'));
    Route::post('goods/create', array ('as' => $adminPrefix.'.goods.create', 'uses' => $adminControllerPrefix.'GoodsController@postCreate'));
    Route::get('goods/{id}/edit', array ('as' => $adminPrefix.'.goods.edit', 'uses' => $adminControllerPrefix.'GoodsController@getEdit'));
    Route::post('goods/{id}/edit', array ('as' => $adminPrefix.'.goods.edit', 'uses' => $adminControllerPrefix.'GoodsController@postEdit'));
    Route::get('goods/{id}/delete', array ('as' => $adminPrefix.'.goods.delete', 'uses' => $adminControllerPrefix.'GoodsController@getDelete'));
    Route::post('goods/{id}/delete', array ('as' => $adminPrefix.'.goods.delete', 'uses' => $adminControllerPrefix.'GoodsController@postDelete'));
    //Route::controller('goods', 'GoodsController');

    # goods categories Management
    Route::get('goods_categories', array ('as' => $adminPrefix.'.goods_categories', 'uses' => 'GoodsCategoriesController@index'));

    Route::get('goods_categories/create', array ('as' => $adminPrefix.'.goods_categories.create', 'uses' => 'GoodsCategoriesController@getCreate'));
    Route::post('goods_categories/create', array ('as' => $adminPrefix.'.goods_categories.create', 'uses' => 'GoodsCategoriesController@postCreate'));
    Route::get('goods_categories/{id}/edit', array ('as' => $adminPrefix.'.goods_categories.edit', 'uses' => 'GoodsCategoriesController@getEdit'));
    Route::post('goods_categories/{id}/edit', array ('as' => $adminPrefix.'.goods_categories.edit', 'uses' => 'GoodsCategoriesController@postEdit'));
    Route::get('goods_categories/{id}/delete', array ('as' => $adminPrefix.'.goods_categories.delete', 'uses' => 'GoodsCategoriesController@getDelete'));
    Route::post('goods_categories/{id}/delete', array ('as' => $adminPrefix.'.goods_categories.delete', 'uses' => 'GoodsCategoriesController@postDelete'));
    //Route::controller('goods_categories', 'GoodsController');

    # draws Management
    Route::get('draws/{id}/show', 'DrawsController@getShow');
    Route::get('draws/{id}/edit', 'DrawsController@getEdit');
    Route::post('draws/{id}/edit', 'DrawsController@postEdit');
    Route::get('draws/{id}/delete', 'DrawsController@getDelete');
    Route::post('draws/{id}/delete', 'DrawsController@postDelete');
    //Route::controller('draws', 'DrawsController');

    
});

/*
Route::filter('admin', function () {
  //
	return true;
});

Route::when('adminka/*', 'admin');
*/
