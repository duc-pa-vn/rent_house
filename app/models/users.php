<?php 
require_once __DIR__.'/../database/database.php';
	class users extends database{
		
		public function login($data){
			$sql = 	'SELECT * FROM rent_house.users where name =:username';
			$stmt = $this->connect->prepare($sql);
			$stmt->bind(':username', $data->['username']);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_OBJ);
			$hashedPassword = $result->pass;
			if(verify_password($data['password'],$hashedPassword)) return true;
			else return false;
		}	

		public function register($data){
			$sql = 'INSERT INTO rent_house.users (name, email, pass) values (:username, :email, :password)';
			$stmt = $this->connect->prepare($sql);
			$stmt->bind(':username',$data['username']);
			$stmt->bind(':email',$data['email']);
			$stmt->bind('password',$data['password']);
			if($stmt->execute()){
				return true;
			}
			else return false;
		}

		public function findUserByEmail($email){
			$sql = 'SELECT * FROM rent_house.users where email = :email';
			$stmt = $this->connect->prepare($sql);
			$stmt->bind(':email',$email);
			if($stmt->rowCount() > 0) return true;
			else return false;
		}
	}
