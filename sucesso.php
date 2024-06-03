<?php
session_start();
 
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
 
echo "Bem-vindo, " . $_SESSION['nome'] . "!";
?>