<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Prefix admin panel
	|--------------------------------------------------------------------------	
	*/

	'prefix' => 'admin',

	/*
	|--------------------------------------------------------------------------
	| Prefix folders views
	|--------------------------------------------------------------------------	
	*/

	'viewPrefix' => array(
		'admin' => 'admins',
		'user' => 'users',
	),

	/*
	|--------------------------------------------------------------------------
	| Prefix folders controllers
	|--------------------------------------------------------------------------	
	*/

	'controllerPrefix' => array(
		'admin' => 'Admin',
		'user' => 'User',
	),

	/*
	|--------------------------------------------------------------------------
	| Layout folder
	|--------------------------------------------------------------------------	
	*/

	'layouts' => array(
		'default' => 'layouts.master',
		'master' => 'layouts.master',
		'content' => 'content',
		'scaffold' => 'layouts.admins.scaffold',
		'nav' => 'layouts.nav',
	),

	
);