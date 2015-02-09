<?php

use Toddish\Verify\Models\User as VerifyUser;

class UserController extends VerifyUser {

	public function index($arg = null)
	{
		
		
		return '<div style="border:1px solid #313131;padding:10px;">Контроллер UserController/'.$arg.'</div>';
	}

	public function print_tpl(){

		return '<div style="border:1px solid #616161;padding:10px;">Шаблон print_tpl для User</div>';
	}

	public function index2(){
		return '<div style="border:1px solid #919191;padding:10px;">Контроллер: UserController, метод: index2</div>';
	}
}