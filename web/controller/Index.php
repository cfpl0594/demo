<?php

namespace web\controller;
/**
 * 
 */

use Gregwar\Captcha\CaptchaBuilder;
class Index
{
	
	protected $view;

	public function __construct()
	{
		$this->view = new \core\View();
	}

	public function show()
	{
		$model = $this->view->make('index');
		$model->with('version','1.2');
		echo $model;
	}

	public function login()
	{
		#echo $_SESSION['phrase'];
		/*$builder = new CaptchaBuilder;
		$builder->build();
		$_SESSION['phrase'] = $builder->getPhrase();*/
		echo $this->view->make('login');
	}

	public function code()
	{
		header('Content-type: image/jpeg');
		$builder = new CaptchaBuilder;
		$builder->build();
		$_SESSION['phrase'] = $builder->getPhrase();
		$builder->output();
	}
}