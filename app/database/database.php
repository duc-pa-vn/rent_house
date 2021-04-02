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

		public function bind($param, $value, $type = null){
			switch(is_null($type)){
				case is_int($value): $type = PDO::PARAM_INT;
				break;
				case is_bool($value): $type = PDO::PARAM_BOOL;
				break;
				case is_null($value): $type = PDO::PARAM_NULL;
				break;
				default: $type = PDO::PARAM_STR;
			}
			return bindValue($param, $value, $type);
		}
	}