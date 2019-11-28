<?php session_start();

if (isset($_POST["cad_contato"])){

    require_once 'classes/contatos.php';
    require_once 'classes/usuarios.php';

    $meuContato = new contatos();
    $usuario = new usuarios();

    $idUsuario = $usuario->find($_SESSION['idUsuario'])->id;

    $meuContato->SetNome($_POST["name"]);
    $meuContato->SetEmail($_POST["email"]);
    $meuContato->SetWhatsapp($_POST["whatsapp"]);
    $meuContato->SetNascimento($_POST["nascimento"]);
    $meuContato->SetApelido($_POST["apelido"]);
    $meuContato->SetTelefone($_POST["telefones"]);
    $meuContato->SetIdUsuario($idUsuario);

    if($meuContato->insert()){ 
        header('Location: inicio.php');
    }
    else
    {
        header('Location: erros.php');
    }
} else {
    echo "Está proucurando o que?";
}
