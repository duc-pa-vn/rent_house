<?php 
/**
 * 
 */
	require_once __DIR__.'/../core/controller.php';
	require_once __DIR__.'/../controllers/housesCtrl.php';

	class homepageCtrl extends controller
	{
		public function __construct(){
			$housesCtrl = new housesCtrl();
			$data =  $housesCtrl->getAll();
			$this->view('index', $data);
		}

	}