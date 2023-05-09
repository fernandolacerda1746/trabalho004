<?php

    include("session.php");
    
    $id = $_GET['id'];
    
    $sql = "DELETE FROM cliente
            WHERE id = {$id}";
    
    include("database/database.php");
    $conn->query($sql);

    header("location: cliente.php");
?>