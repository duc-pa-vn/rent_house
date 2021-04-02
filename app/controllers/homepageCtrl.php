<?php 
/**
 * 
 */
	require_once __DIR__.'/../core/controller.php';
	class homepage extends controller
	{
		public function __construct(){
			$this->view('index');
		}
	}