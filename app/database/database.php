<?php 
	class database {

		private $host = "localhost";
		private $user = "root";
		private $pw   = "Sister2002_" ;
		private $dtbn = "rent_house";

		protected function connect(){
			$dsn = 'mysql:host'.$this->host.';dbname='.$this->dtbn;
			try{
				$pdo = new PDO($dsn, $this->user, $this->pw);
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				return $pdo;
			} catch(PDOException $e){
				echo $e->getMessage();
			}	

		}
	}