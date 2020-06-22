<?php include('/client/cabecalho.php'); ?>

<?php

if (
    !isset($_SESSION['clientes']['id']) or
    !$_SESSION['clientes']['adm']
) {
    session_destroy();

    header("Location: /client/login.php");

    die();
}
?>

<?php

include("/server/clientes.php");

$usuarios = listar();

?>

<div class="container-fluid">
    <div class="row">
        <div class="col justify-content-around">

            <h1>Lista de Clientes - Visão Admin</h1>

            <a href="clientes-cadastrar.php" class="btn btn-primary btn-sm" title="Novo"><i class="fas fa-user-plus"></i></a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <?php if ($usuario['id'] == $_SESSION['clientes']['id']) : ?>
                            <tr class="<?= ($usuario['inativado'] != null) ? 'table-dark' : 'table-info' ?>">
                            <?php else : ?>
                            <tr class="<?= ($usuario['inativado'] != null) ? 'table-dark' : '' ?>">
                            <?php endif ?>
                            <th scope="row"><?= $usuario['id'] ?></th>
                            <td><?= $usuario['nome']." ".$usuario['sobrenome'] ?></td>
                            <td><?= $usuario['cpf'] ?></td>
                            <td><?= $usuario['email'] ?></td>
                            <td><?= $usuario['celular'] ?></td>
                            <td>
                                <a href="/client/clientes-editar.php?id=<?= $usuario['id'] ?>" class="btn btn-primary btn-sm" title="Editar"><i class="fas fa-user-edit"></i></a>
                                <?php if ($usuario['inativado'] != null) : ?>
                                    <a href="/server/clientes-reativar.php?id=<?= $usuario['id'] ?>" class="btn btn-warning btn-sm" title="Reativar"><i class="fas fa-undo"></i></a>
                                <?php else : ?>
                                    <a href="/server/clientes-inativar.php?id=<?= $usuario['id'] ?>" class="btn btn-secondary btn-sm" title="Inativar"><i class="fas fa-ban"></i></a>
                                <?php endif ?>
                                <a href="/server/clientes-apagar.php?id=<?= $usuario['id'] ?>" class="btn btn-danger btn-sm" title="Apagar"><i class="fas fa-user-slash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php include('/client/rodape.php'); ?>