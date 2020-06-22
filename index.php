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
                <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger"
                    href="/institucional.php">Institucional</a>
                <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger"
                    href="/diaadia.php">Dia a
                    Dia</a>
                <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger"
                    href="/solucoescorp.php">Soluções Corporativas</a>
                <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger"
                    href="/gamersestreamers.php">Gamers & Streamer</a>
                <a class="nav-item mx-0 mx-lg-1 nav-link py-1 px-0 px-lg-3 rounded js-scroll-trigger"
                    href="/contato.php">Contato</a>
            </div>
        </div>
    </main>
    <div class="container">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/AdobeStock_334999263.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/AdobeStock_310427627.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/AdobeStock_301929455.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <div class="container">
        <div class="texto-destaque1">
            <h2>Origem do aplicativo</h2>
            <p>O aplicativo BootKamp surgiu no ano de 2019 em São Paulo-SP. O diferencial deste aplicativo é o respeito
                amor e dedicação aos nossos clientes empregando esforços em produtos procedência e excelente qualidade.
                Nosso site foi pensado e desenvolvido para oferecer um sistema confiável.
            </p>
        </div>
        <div class="texto-destaque2">
            <h2>Descubra aqui o equipamento ideal para você ou sua empresa</h2>
            <p>Quer descobrir qual é o melhor equipamento que se adapte a sua necessidade ou a necessidade de sua
                empresa. Preencha o seguinte formulário.</p>
            <a href="./formequip.php">
                <button class="btn btn-secondary">Acessar</button>
            </a>

        </div>
    </div>


    <footer class="page-footer  bg-secondary text-white fixed-bottom">
        <div class="container">
            <div class="row mx-auto my-2">
                <div class="col-2">
                    <img class="img-fluid" src="/assets/img/bootkamp-logo.png" alt="Bootkamp Logo">
                </div>
                <div class="col-4">
                    <div class="row">
                        <p><strong>"O aplicativo BootKamp é uma marca registrada do grupo Pandora Desenvolvimento
                                LTDA."</strong></p>
                    </div>
                    <div class="row">
                        <address>"Avenida dos Bolinhos Mesclados, 11955 - Galpão C5 - Bairro: Lavras - CEP:00000-000 -
                            Guarulhos/SP"</address>
                    </div>
                </div>
                <div class="col">
                    As fotos contidas nesta página são meramente ilustrativas dos produtos e podem variar de acordo com
                    o fornecedor/lote do fabricante.
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>