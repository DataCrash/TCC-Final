<?php
include('./cabecalho.php');

if (!isset($_SESSION)) session_start();
?>

<div class="container">

    <div class="row">
        <div class="col-12">

            <form class="form-control-sm align-items-end" method="POST" action="/server/clientes-cadastrar-post.php">
                <div class="form-group col-6 p-2 m-auto">
                    <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome" value="<?= isset($_SESSION['post_nome']) ? $_SESSION['post_nome'] ?? '' : '' ?>">
                </div>
                <div class="form-group col-6 p-2 m-auto">
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" aria-describedby="sobrenome" placeholder="Sobrenome" value="<?= isset($_SESSION['post_sobrenome']) ? $_SESSION['post_sobrenome'] ?? '' : '' ?>">
                </div>
                <div class="form-group col-6 p-2 m-auto">
                    <input type="text" name="cpf" class="form-control" id="cpf" aria-describedby="cpf" placeholder="CPF" value="<?= isset($_SESSION['post_cpf']) ? $_SESSION['post_cpf'] ?? '' : '' ?>">
                </div>
                <div class="form-group col-6 p-2 m-auto">
                    <input type="text" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" value="<?= isset($_SESSION['post_email']) ? $_SESSION['post_email'] ?? '' : '' ?>">
                </div>
                <div class="form-group col-6 p-2 m-auto">
                    <input type="number" name="celular" class="form-control" id="celular" aria-describedby="celular" placeholder="Celular" value="<?= isset($_SESSION['post_celular']) ? $_SESSION['post_celular'] ?? '' : '' ?>">
                </div>
                <div class="form-group col-6 p-2 m-auto">
                    <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="usuario" placeholder="Usuário" value="<?= isset($_SESSION['post_usuario']) ? $_SESSION['post_usuario'] ?? '' : '' ?>">
                </div>
                <div class="form-group col-6 p-2 m-auto">
                    <input type="password" name="senha" class="form-control" id="senha" aria-describedby="senha" placeholder="Senha" value="<?= isset($_SESSION['post_senha']) ? $_SESSION['post_senha'] ?? '' : '' ?>">

                    <?php if (isset($_SESSION['error_email']) and $_SESSION['error_email']) : ?>
                        <div class="error-log my-2 text-danger">
                            <?= $_SESSION['error_email'] ?>
                        </div>
                    <?php endif ?>

                </div>
                <input type="hidden" name="adm" id="adm" aria-describedby="adm" value="<?= isset($_SESSION['post_adm']) ? $_SESSION['post_adm'] ?? '' : '' ?>">

                <?php
                unset($_SESSION['error_email']);
                if (isset($_SESSION)) {
                    foreach (array_keys($_SESSION) as $chave) {
                        if (substr($chave, 0, 5) == 'post_') {
                            unset($_SESSION[$chave]);
                        }
                    }
                }
                ?>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="/client/clientes-listar.php" class="btn btn-success">Listar</a>
            </form>


        </div>
    </div>

</div>


<?php include('./rodape.php') ?>