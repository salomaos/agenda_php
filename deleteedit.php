<?php

session_start();

require_once "classes/contatos.php";
$contatos = new contatos();

if (isset($_POST["edit"])){
    $_SESSION["emailEdit"] = $_POST["edit"];
    header('Location: editarcontato.php');
} elseif (isset($_POST["delete"])){
    $contatos->deleteContato($_POST["delete"]);
    header('Location: inicio.php');
}
