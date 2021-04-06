<?php 
	require_once __DIR__.'/../database/database.php';
	class houses extends database{

			public function getAll(){
				$sql = 'SELECT * FROM rent_house.houses';
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute();
				$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $row;
			}       
			// public function filter($data){
			// 	$sql = 'SELECT * FROM rent_house.house where ';
			// }
		}	