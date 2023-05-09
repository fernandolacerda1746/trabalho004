<?php 

include("session.php");
include("database/database.php");

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$peso = $_POST['peso'];

$sql = "INSERT INTO produto
        (nome, preco, quantidade, peso)
        VALUES
        ('{$nome}', {$preco}, {$quantidade}, {$peso})";

echo $sql;

$result = $conn->query($sql);

$conn->close();

header("location: produto.php");

?>