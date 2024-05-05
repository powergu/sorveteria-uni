<?php
session_start();
$_SESSION = array(); // Limpa todas as variáveis de sessão
session_destroy(); // Destrói a sessão
header('Location: login.php');
exit();
?>
