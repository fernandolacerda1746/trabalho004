<?php 

include("session.php");
include("database/database.php");

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cidade_nasc = $_POST['cidade_nasc'];
$ativo = $_POST['ativo'];

$sql = "INSERT INTO cliente
        (nome, data_nascimento, cidade_nasc, ativo)
        VALUES
        ('{$nome}', '{$data_nascimento}', {$cidade_nasc}, {$ativo})";

echo $sql;

$result = $conn->query($sql);

$conn->close();

header("location: cliente.php");

?>