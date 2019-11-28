<?php 

require_once "classes/crud.php";

class usuarioDAO extends CRUD {

    protected $tabela = "usuarios";

    public function insert(){	
		$sql = "INSERT INTO $this->tabela (email, senha) VALUES (:email, :senha)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':email', $this->GetEmail());
		$stmt->bindParam(':senha', $this->GetSenha());
		
		return $stmt->execute();
    }    
    
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
