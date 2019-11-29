<?php

require_once "classes/contatos.php";
$contatos = new contatos();

if (isset($_POST["edit"])){
    $_SESSION["emailEdit"] = $_POST["edit"];
    echo $_SESSION["emailEdit"];
} elseif (isset($_POST["delete"])){
    $contatos->deleteContato($_POST["delete"]);
    header('Location: inicio.php');
}