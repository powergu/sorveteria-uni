<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/icone.ico" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js"></script>
</head>
<body>
    
<div id="mensagem">Olá</div>
    <div class="login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST" id="loginForm">
        <input class="log" type="text" name="email" placeholder="Email" id="email">
        <br><br>
        <input class="log" type="password" name="senha" placeholder="Senha" id="senha">
        <br><br>
        <input class="enviar" type="submit" name="submit" value="Enviar">
        <p id="link"><a href="tela-de-cadastro.php" id="link">Faça seu cadastro aqui</a></p>

        </form>
    </div>
</body>
</html>
