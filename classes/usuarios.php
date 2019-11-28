<?php


require_once 'DAO/usuarioDAO.php';

class usuarios extends usuarioDAO {

	protected $tabela = 'usuarios';
	private $email;
	private $senha;
	
	Public function GetEmail(){
		return $this->email;
	}
	
	Public function SetEmail($email){
		$this->email=$email;
	}
	
	Public function GetSenha(){
		return $this->senha;
	}
	
	Public function SetSenha($senha){
		$this->senha=$senha;
	}
}
