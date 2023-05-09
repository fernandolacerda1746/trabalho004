<?php 

include("session.php");

$id = $_GET['id'];
    
$sql = "DELETE FROM produto
        WHERE id = {$id}";

echo $sql;

include("database/database.php");
$conn->query($sql);

header("location: produto.php");

?>