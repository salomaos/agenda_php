<?php

require_once 'DAO/contatoDAO.php';

class contatos extends contatoDAO {

	protected $tabela = 'contatos';
	private $nome;
	private $email;
	private $whatsapp;
	private $nascimento;
	private $apelido;
	private $telefone = array();
	private $idUsuario;
	
	Public function GetNome(){
		return $this->nome;
	}
	
	Public function SetNome($nome){
		$this->nome = $nome;
	}
	
	Public function GetEmail(){
		return $this->email;
	}
	
	Public function SetEmail($email){
		$this->email = $email;
	}
	
	Public function GetWhatsapp(){
		return $this->whatsapp;
	}
	
	Public function SetWhatsapp($whatsapp){
		$this->whatsapp = $whatsapp;
	}
	
	Public function GetNascimento(){
		return $this->nascimento;
	}
	
	Public function SetNascimento($nascimento){
		$this->nascimento = $nascimento;
	}
	
	Public function GetApelido(){
		return $this->apelido;
	}
	
	Public function SetApelido($apelido){
		$this->apelido = $apelido;
	}

	Public function GetTelefone(){
		return $this->telefone;
	}
	
	Public function SetTelefone($telefone){
		$this->telefone = $telefone;
	}

	Public function GetIdUsuario(){
		return $this->idUsuario;
	}
	
	Public function SetIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}
	
}
