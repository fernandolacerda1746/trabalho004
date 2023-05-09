<?php 

session_start();

if(isset($_SESSION['login'])){
    $_SESSION['login'] = null;
    header("location: index.php");
    exit;
}else{
    header("location: index.php");
}

?>