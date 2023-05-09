<?php

session_start();

//Bloqueio de acesso à página principal
if(!isset($_SESSION['login'])){
    header("location: index.php");
    exit;
}else{
    $nome = $_SESSION['login']['nome'];
}

?>