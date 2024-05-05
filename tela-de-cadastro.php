<?php
if(isset($_POST['submit'])) {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereço'];

    // Define o nome do arquivo CSV
    $csv_file = 'usuarios.csv';

    // Abre o arquivo CSV para escrita (ou cria o arquivo se não existir)
    $file = fopen($csv_file, 'a');

    // Escreve os dados do usuário no arquivo CSV
    fputcsv($file, array($nome, $email, $senha, $telefone, $genero, $data_nasc, $cidade, $estado, $endereco));

    // Fecha o arquivo CSV
    fclose($file);

    // Exibe uma mensagem de sucesso
    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/icone.ico" type="image/x-icon">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <div class="box">
        <form action="tela-de-cadastro.php" method="POST">
            <fieldset>
                <legend><b>Faça seu Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereço" id="endereço" class="inputUser" required>
                    <label for="endereço" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" class="enviar">
                <p id="link"><a href="login.php" id="link">Fazer Login</a></p>
                <p id="link"><a href="home.php" id="link">Voltar para a página inicial</a></p>
            </fieldset>
        </form>
    </div>
</body>
</html>
