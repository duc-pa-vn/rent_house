<?php 
	require_once __DIR__.'/../core/controller.php';

	class savesCtrl extends controller{

		public function __construct(){
			$this->model = $this->model('saves');
		}

		public function save($idhouse){
			// $this->model->save($idhouse);
			$saveBool = $this->model->save($idhouse);
  			if($saveBool == 1) $suc = "luu thanh cong";
  			else if($saveBool == 0) $suc = "ko luu dc";
  			else $suc ="da duoc luu";
  			setcookie("saveReport",$suc, time()+1);
			header('location:http://localhost:8088/public');
		}

		public function getSaved(){
			$list = $this->model->getSaved();
			return $list;
		}
	}