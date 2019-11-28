<?php

if (isset($_POST["entrar"])) {
    require "classes/usuarios.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (empty($email) || empty($senha)){
        header("Location: index.php?erro=Os campos não podem estar vazios");
        exit();
    } else {
        $usuario = new usuarios();
        $usuarioSalvo = $usuario->findEmail($email);
        $emailSalvo = $usuarioSalvo->email;
        $senhaSalva = $usuarioSalvo->senha;

        if ($email == $emailSalvo && $senha == $senhaSalva){
            session_start();
            $_SESSION["idUsuario"] = $usuarioSalvo->id;
            header("Location: inicio.php?mensagem=Entrou com sucesso");
        } else {
            header("Location: index.php?erro=Usuário ou senha inválida");
        }
    }

} else {
    header("Location: index.php");
    exit();
}