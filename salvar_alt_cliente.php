<?php

include("session.php");
include("database/database.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cidade_nasc = $_POST['cidade_nasc'];
$ativo = $_POST['ativo'];

$sql = "UPDATE cliente
        SET nome = '{$nome}',
            data_nascimento = '{$data_nascimento}',
            cidade_nasc = {$cidade_nasc},
            ativo = {$ativo}
        WHERE id = {$id}";


$conn->query($sql);

header("location: cliente.php");

?>