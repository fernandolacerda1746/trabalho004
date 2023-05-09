<?php

    include("database/database.php");

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario
            (nome, usuario, email, senha)
            VALUES
            ('{$nome}', '{$usuario}', '{$email}', '{$senha}')";

    echo $sql;

    $result = $conn->query($sql);

    $conn->close();

    header("location: index.php");

?>