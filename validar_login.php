<?php

    session_start();

    include("database/database.php");
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $sql = "SELECT nome, senha
            FROM usuario
            WHERE usuario = '{$usuario}'";
    

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

            $senha_validar = $row["senha"];
            $nome = $row["nome"];

        }
    }

    if($senha_validar == $senha){

       $usuario_logado = array(
            'dominio' => "feiradorolo.com.br",
            'usuario' => $usuario,
            'nome' => $nome
        );

        $_SESSION['login'] = $usuario_logado;

        header("location: pagina_inicial.php");


    }else{

        header("location: index.php");

    }

    
?>