<?php
include('cabecalho.php');

$_SESSION['login_error'] = $_SESSION['login_error'] ?? 0;
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="POST" action="/server/clientes-login-post.php">
                <div class="form-group">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="usuario" placeholder="Entre com seu usuário" value="<?= $_SESSION['login_usuario'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" placeholder="Entre com sua senha" value="<?= $_SESSION['login_senha'] ?? '' ?>">
                </div>

                <?php if ($_SESSION['login_error']) : ?>
                    <div class="error-log my-2 text-danger">
                        <?= $_SESSION['login_error'] ?>
                        <?php unset($_SESSION['login_error']) ?>
                        <?php unset($_SESSION['login_usuario']) ?>
                        <?php unset($_SESSION['login_senha']) ?>
                    </div>
                <?php endif ?>

                <button type="submit" class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="/index.php">Cancelar</a>
            </form>
        </div>
    </div>
</div>

<?php include('rodape.php'); ?>