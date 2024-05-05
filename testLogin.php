<?php
if(isset($_POST['submit'])) {
    // Verifica se os campos de email e senha estão preenchidos
    if(empty($_POST['email']) || empty($_POST['senha'])) {
        header('Location: login.php?logado=empty');
        exit();
    } else {
        // Acessa o sistema
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Prevenção de SQL injection usando prepared statements
        $sql = "SELECT * FROM usuarios WHERE email = ? and senha = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se houve resultados da consulta
        if($result->num_rows > 0) {
            // Se houver, o login é bem-sucedido
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['nome_usuario'] = $email;
            header('Location: home.php?logado=true');
            exit();
        } else {
            // Se não houver resultados, redireciona de volta para a página de login
            header('Location: login.php?logado=false');
            exit();
        }
    }
} else {
    // Se não foi enviado o formulário, redireciona para a página de login
    header('Location: login.php');
    exit();
}
?>
