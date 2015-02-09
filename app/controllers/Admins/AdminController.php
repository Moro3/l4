<?php

class AdminController extends \BaseController {

	protected $viewPrefix;

	
	//protected $layout = 'layouts.admins.scaffold';

	public function __construct(){
		//parent::__construct();

		$this->viewPrefix = Config::get('dev.viewPrefix.admin');

		//$this->layout = Config::get('dev.layouts');
		$this->layout = 'layouts.admins.scaffold';
		//$this->layout = 'goods.admins.scaffold';

		//$this->layout->adminPrefix = Config::get('dev.viewPrefix.admin');
		
		View::composer('*', function($view)
		{
		    $view->with('adminPrefix', Config::get('dev.viewPrefix.admin'))
		    	->with('viewPrefix', Config::get('dev.viewPrefix.admin'))
		    	->with('layouts', Config::get('dev.layouts'))
		    ;
		});
		
	}
	
	public function print_tpl(){

		
		return '<div style="border:1px solid #666;padding:10px;">Шаблон print_tpl для AdminController </div>';
	}

	public function index2(){
		return '<div style="border:1px solid #969696;padding:10px;">Контроллер: AdminController, метод: index2</div>';
	}

	/**
	 * Display a listing of goods
	 *
	 * @return Response
	 */
	public function index()
	{
		$goods = Good::all();
		$userGood = URL::action('UserGoodsController@index');

		return View::make('layouts.admins.main');
	}

	public function view_include(){
		
		
		return View::make('layouts.test.include');
	}
}