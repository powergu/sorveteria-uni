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
            background-color: rgba(255, 255, 255, 0.3);
            width: 98%;
            border: 1px solid white;
            margin: 1%;
        }

        .prato .prato-img {
            border: 1px solid white;
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
            top: 300px;
            width: 70%;
        }
        .texto-imagem-2 {
            position: absolute;
            top: 600px;
            width: 70%;
        }
        .texto-imagem-3 {
            position: absolute;
            top: 900px;
            width: 70%;
        }
        .texto-imagem-4 {
            position: absolute;
            top: 1200px;
            width: 70%;
        }
        .texto-imagem-5 {
            position: absolute;
            top: 1500px;
            width: 70%;
        }
        #sobre-nos{
            position: absolute;
            left: 45%;
            margin: 2%;
            font-family: verdana;
            font-style: italic;
            text-align: center;
            font-size: 24px;   
            text-shadow: rgb(0, 0, 0) 2px 2px 2px;
        }

        #link-ref{
            text-decoration:none;
            color: rgb(250, 244, 247);
            text-shadow: rgb(0, 0, 0) 2px 2px 2px;
        }

    </style>
</head>
<body class="home">
    <div class="botoes">
        <span id="nomeUsuario">Bem-vindo, <?php echo $nome_usuario; ?></span>
        <br><br>
        <a href="logout.php" class="botsup">Logout</a>
    </div>
    <h1 class="titulo">Nosso Cardápio</h1><div id="jump"><br><br><br><br><br><br><br></div>
    <div id="menu-cardapio">
        <div class="prato">
            <h3 class="titulo-prato">Ice Cream Chocollate</h3>
            <img class="prato-img" style="width:200px; height:200px;" src="imagens/sorvete-1.jpg" alt="">
            <span class="texto-imagem-1">Delicie-se com a riqueza e a suavidade do nosso Sorvete de Chocolate. Cada colher é uma mistura celestial de cacau premium, criando uma experiência deliciosamente suave e decadente. É o tratamento perfeito para os amantes de chocolate, oferecendo uma escapadela satisfatoriamente doce a cada mordida.</span>
        </div>
        <div class="prato">
            <h3 class="titulo-prato">Pure Love Stramberry</h3>
            <img class="prato-img" style="width:200px; height:200px;" src="imagens/sorvete-2.jpg" alt="">
            <span class="texto-imagem-2">Apaixone-se pelo nosso Sorvete de Morango Puro Amor. Repleto do sabor vibrante de morangos frescos, cada colherada é uma sinfonia deliciosa de doçura e frescor. Feito com amor e os melhores ingredientes, é um sabor de pura felicidade em cada bola.</span>
        </div>
        <div class="prato">
            <h3 class="titulo-prato">Lovely Neopolitan</h3>
            <img class="prato-img" style="width:200px; height:200px;" src="imagens/sorvete-6.jpg" alt="">
            <span class="texto-imagem-3">Experimente o charme do nosso Sorvete Neapolitano Encantador, um clássico intemporal que nunca deixa de encantar. Com seu trio de sabores - baunilha cremosa, chocolate indulgente e morango frutado - é uma harmonia irresistível de gostos que agrada a todos os paladares.</span>
        </div>
        <div class="prato">
            <h3 class="titulo-prato">Iced Chocolate</h3>
            <img class="prato-img" style="width:200px; height:200px;" src="imagens/sorvete-4.jpg" alt="">
            <span class="texto-imagem-4">Refresque-se com o nosso delicioso Sorvete de Chocolate Gelado. Cada colher é uma explosão de sabor de chocolate rico e cremoso, perfeito para saciar os desejos mais intensos por chocolate. Com uma textura suave e um sabor irresistível, é a escolha ideal para os amantes de chocolate que buscam uma experiência refrescante.</span>
        </div>
        <div class="prato">
            <h3 class="titulo-prato">Pearl Ice Strambery</h3>
            <img class="prato-img" style="width:200px; height:200px;" src="imagens/sorvete-5.jpg" alt="">
            <span class="texto-imagem-5">Deixe-se encantar pela nossa Pérola de Sorvete de Morango Gelado. Feito com morangos suculentos e frescos, este sorvete oferece uma explosão refrescante de sabor frutado em cada mordida. Com sua cor vibrante e sabor deliciosamente doce, é uma verdadeira jóia entre os sorvetes, perfeito para satisfazer os desejos de verão.</span>
        </div>
        <span id="sobre-nos"><a href="homenouser.php" id="link-ref">Sobre nós</a></span>
    </div>
        <br><br>
            
</body>
</html>
<?php
} else {
    header('Location: login.php');
    exit();
}
?>
