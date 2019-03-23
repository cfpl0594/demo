<?php

namespace core;
/**
 *
 */
class Bootstrap
{
	
	public static function run()
	{
		#echo __METHOD__;
		self::parseUrl();
	}

	public static function parseUrl()
	{
		#dd($_SERVER);
		if (isset($_GET['s'])) {
			$info = explode('/',$_GET['s']);
			$class = '\web\controller\\'.ucfirst($info[0]);
			$action = $info[1];
		} else {
			$class = '\web\controller\Index.php';
			$action = 'show';
		}
		(new $class)->$action();
	}
}