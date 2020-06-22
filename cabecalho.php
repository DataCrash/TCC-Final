<?php

if (!isset($_SESSION)) session_start();

if (!array_key_exists('clientes', $_SESSION)) $_SESSION['clientes'] = [];

$_SESSION['clientes']['id'] = $_SESSION['clientes']['id'] ?? 0;
$_SESSION['clientes']['admin'] = $_SESSION['clientes']['admin'] ?? -1;
$_SESSION['clientes']['nome'] = $_SESSION['clientes']['nome'] ?? 'Desconhecido';
$_SESSION['clientes']['foto'] = $_SESSION['clientes']['foto'] ?? 0;

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BootKamp</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous">
    <!-- CSS Principal com Bootstrap -->
    <link href="/assets/css/styles.css" rel="stylesheet">
    <!-- CSS de Fontes -->
    <link rel="stylesheet" href="/assets/css/heading.css">
    <link rel="stylesheet" href="/assets/css/body.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-sm bg-secondary">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img class="img-fluid" src="/assets/img/bootkamp-logo.png" alt="Bootkamp Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Expandir Menu">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <?php if (!$_SESSION['clientes']['id']) : ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes-cadastrar.php">Cadastrar</a>
                    </li>

                    <?php else : ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <?php if (!$_SESSION['clientes']['foto']) : ?>
                            <i class="fa fa-user-circle text-light"></i>
                            <?php else : ?>
                            <?php header("Content-type: image/gif") ?>
                            <?= $_SESSION['clientes']['foto'] ?>
                            <?php endif ?>
                            Olá, <?= $_SESSION['clientes']['nome'] ?>!
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="server/logout.php">Sair</a>
                    </li>

                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="navbar justify-content-around bg-light">
                    <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="#institucional">Institucional</a>
                    <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="#dia">Dia a Dia</a>
                    <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="#corporativas">Soluções Corporativas</a>
                    <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="#gamers">Gamers & Streamer</a>
                    <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger" href="#contato">Contato</a>
            </div>
        </div>
    </main>
