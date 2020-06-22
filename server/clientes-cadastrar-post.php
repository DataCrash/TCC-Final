<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

include('clientes.php');
if (!isset($_SESSION)) session_start();

$usuario_id = cadastrar($_POST);
$usuario = carregar($id);
$SESSION['usuario'] = $usuario;

header('Location: ../clientes-listar.php');
