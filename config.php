

<?php

    // Altere seu usuario, senha para acessar seu root MYSQL 
    
    $dbHost = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = '!Gabs261497';
    $dbName = 'cadastro_sorveteria';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>

