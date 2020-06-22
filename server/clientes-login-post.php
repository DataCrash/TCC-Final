<?php
include('/server/clientes.php');
$usuario = logar($_POST);

if (!isset($_SESSION)) session_start();

if ($usuario) {
    $_SESSION['usuario'] = $usuario;

    header('Location: /client/clientes-listar.php');
} else {
    $_SESSION['login_error'] = "Usuário ou Senha Incorretos!";
    $_SESSION['login_usuario'] = $_POST['usuario'] ?? "";
    $_SESSION['login_senha'] = $_POST['senha'] ?? "";
    header('Location: /client/login.php');
}
