<?php
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    $nome_usuario = $_SESSION['nome_usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Sorveteria Aurora</title>
    <script src="js/script.js"></script>
    <style>
        .botoes{
            margin:2%;
        }
        #menu-cardapio {
            margin: 20px; /* Adicione margem entre os pratos */
            padding: 1%; /* Ajuste o preenchimento dos pratos */
            border: 3px solid white;
        }

        .prato {
            position: absolute;
            top: 150px;
            background-color: rgba(255, 255, 255, 0.3);
            width: 98%;
            border: 1px solid white;
        }

        .prato .prato-img {
            width: 300px;
            height: 200px;
            margin: 3%;
            margin-top: 0;
            border-radius: 5%;
        }
        .titulo-prato{
            text-align:center;
            margin-bottom: 0;
            font-family: verdana;
            font-style: italic;
            text-align: center;
            font-size: 24px;    
            color: rgb(250, 244, 247);
            text-shadow: rgb(0, 0, 0) 2px 2px 2px;
        }
        span{
            font-weight: bold;
            font-size: 22px;
        }
        .texto-imagem-1 {
            position: absolute;
            top: 100px;
            width: 70%;
        }
        #rodape{
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body class="home">
    <div class="botoes">
        <span id="nomeUsuario">Bem-vindo, <?php echo $nome_usuario; ?></span>
        <br><br>
        <a href="logout.php" class="botsup">Logout</a>
    </div>
    <h1 class="titulo">Sobre nós</h1>

    <div class="prato">
        <h3 class="titulo-prato">Sorveteria Aurora</h3>
        <img class="prato-img" style="width:200px; height:200px;" src="imagens/icone.ico" alt="">
        <span class="texto-imagem-1">"Seja bem-vindo à Sorveteria Aurora, onde cada sorvete é uma experiência única e deliciosa! Fundada há mais de duas décadas, nossa sorveteria tem sido um ponto de encontro para amigos e      famílias que buscam momentos de doçura e alegria.</span>
    </div>

    <a href="home.php" id="link">Voltar para a página inicial</a>
    <footer id="rodape"> &copy; Todos os direitos Reservados - Gustavo, Geovanna, Alexandra</footer>
</body>
</html>
<?php
} else {
    header('Location: login.php');
    exit();
}
?>
