<?php 

/**
 * 
 */
require_once __DIR__'/../core/controller.php';
class users extends controller
{
	public function __construct()
	{
		$this->model('user')
	}
}
