<?php include('cabecalho.php'); ?>

<section class="container">
    <div class="contatos">
        <h3>Formulário de contato</h3>

        <form class="col-3" method="POST" action="#"> <input class="field" name="nome" placeholder="Nome">
            <input class="field" name="email" placeholder="E-mail">
            <input class="field" name="motivo" placeholder="Motivo">
            <textarea class="field" name="msg" placeholder="Digite sua mensagem aqui.">

                </textarea>
            <input type="submit" value="enviar">

        </form>
    </div>
</section>

<?php include('rodape.php'); ?>