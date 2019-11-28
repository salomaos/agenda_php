<?php

if (isset($_POST["cad_usuario"])){
    include 'classes/usuarios.php';

    $usuario = new usuarios();

    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);


    if($usuario->findEmail($_POST["email"])){
        header('Location: cadusuario.php?erro=E-mail já cadastrado');
    } else {
        if ($_POST["senha"] == $_POST["repetir-senha"]){
            if($usuario->insert()){
                header('Location: index.php');
                exit();
            } else {
                header('Location: cadusuario.php?erro=Erro ao cadastrar usuário');
                exit();
            }
        } else {
            header("Location: cadusuario.php?erro=Senhas devem ser idênticas");
            exit();
        }

    }
} else {
    header("Location: cadusuario.php");
    exit();
}

