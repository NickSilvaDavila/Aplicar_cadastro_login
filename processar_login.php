<?php
session_start();
include 'db_connection.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
 
    $sql = "SELECT id, nome, senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
 
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nome, $hash_senha);
        $stmt->fetch();
 
        if (password_verify($senha, $hash_senha)) {
            // Credenciais válidas
            $_SESSION['usuario_id'] = $id;
            $_SESSION['nome'] = $nome;
            header("Location: sucesso.php");
            exit();
        } else {
            // Senha incorreta
            echo "E-mail ou senha incorretos.";
        }
    } else {
        // Usuário não encontrado
        echo "E-mail ou senha incorretos.";
    }
 
    $stmt->close();
    $conn->close();
}
?>
