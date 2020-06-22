<?php

include("/server/clientes.php");

$usuario = carregar($_GET['id']);

?>

<?php include('/client/cabecalho.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <form method="POST" action="/server/clientes-editar-post.php">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome" value="<?= $usuario['nome'] ?>">
                </div>
                <div class="form-group">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" aria-describedby="sobrenome" placeholder="Sobrenome" value="<?= $usuario['sobrenome'] ?>">
                </div>
                <div class="form-group">
                    <label for="text">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" aria-describedby="cpf" placeholder="CPF" value="<?= $usuario['cpf'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" value="<?= $usuario['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="number" name="celular" class="form-control" id="celular" aria-describedby="celular" placeholder="Celular" value="<?= $usuario['celular'] ?>">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="usuario" placeholder="Usuário" value="<?= $usuario['usuario'] ?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" aria-describedby="senha" placeholder="Senha" value="<?= $usuario['senha'] ?>">
                </div>

                <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="/usuario-listar.php" class="btn btn-danger">Cancelar</a>
            </form>

        </div>
    </div>
</div>

<?php include('/client/rodape.php') ?>