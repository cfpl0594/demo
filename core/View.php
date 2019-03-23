<?php

namespace core;

/**
 * 
 */
class View
{
	
	protected $file;

	protected $vars = [];

	public function make($filename)
	{
		$this->file = 'web/view/'.$filename.'.html';
		return $this;
	}

	public function with($key,$value)
	{
		$this->vars[$key] = $value;
	}

	public function __toString()
	{
		extract($this->vars);
		include $this->file;
		return '';
	}
}