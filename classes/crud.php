<?php

require_once 'DB.php';

abstract class CRUD extends DB{

	protected $tabela;

	abstract public function insert();
	
	public function find($id){
		$sql  = "SELECT * FROM $this->tabela WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findEmail($email){
		$sql  = "SELECT * FROM $this->tabela WHERE email = :email";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
	}
	
	public function findAll(){
		$sql  = "SELECT * FROM $this->tabela";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete(){
		$sql  = "DELETE FROM $this->table WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}	
}