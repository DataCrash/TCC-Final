<?php include('/client/cabecalho.php'); ?>

<?php

if (
    !isset($_SESSION['clientes']['id']) or
    !$_SESSION['clientes']['adm']
    )
{
    session_destroy();

    header("Location: login.php");

    die();
}
?>

<?php

include("/server/clientes.php");

$usuarios = listarAtivos();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col justify-content-around">

            <h1>Lista de Clientes - Visão <?= ($_SESSION['clientes']['id'] != 0) ? $_SESSION['clientes']['nome'] : 'Geral' ?></h1>

            <?php if ($_SESSION['clientes']['id'] != 0) : ?>
                <a href="clientes-editar.php?id=<?= $_SESSION['clientes']['id'] ?>" class=" btn btn-primary btn-sm" title="Editar seus dados"><i class="fas fa-user-edit"></i></a>
            <?php endif ?>

            <?php if ($_SESSION['clientes']['id'] == 1) : ?>
                <a href="clientes-listar-admin.php?id=<?= $_SESSION['clientes']['id'] ?>" class=" btn btn-primary btn-sm" title="Administrar Clientes"><i class="fas fa-tools"></i></a>
            <?php endif ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <tr class="<?= ($usuario['id'] == $_SESSION['clientes']['id']) ? 'table-info' : '' ?>">
                            <th scope="row"><?= $usuario['id'] ?></th>
                            <td><?= $usuario['nome']." ".$usuario['sobrenome'] ?></td>
                            <td><?= $usuario['cpf'] ?></td>
                            <td><?= $usuario['email'] ?></td>
                            <td><?= $usuario['celular'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php include('/client/rodape.php'); ?>