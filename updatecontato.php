<?php 

require_once 'classes/contatos.php';

$meuContato = new contatos();


$meuContato->SetNome($_POST["name"]);
$meuContato->SetEmail($_POST["email"]);
$meuContato->SetWhatsapp($_POST["whatsapp"]);
$meuContato->SetNascimento($_POST["nascimento"]);
$meuContato->SetApelido($_POST["apelido"]);
$meuContato->SetTelefone($_POST["telefones"]);

$meuContato->update($_POST["email"]);
$meuContato->updateTelefones($_POST["email"]);

header("Location: inicio.php");