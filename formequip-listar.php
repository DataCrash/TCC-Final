<?php include('cabecalho.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form class="equip" method="Post" action="./formequip-listar.php">
                <label>Necessidade do equipamento</label>
                <select name="Uso" id="tipoUso">
                    <option value="0">Dia a dia</option>
                    <option value="1">Soluções Corporativas</option>
                    <option value="2">Gamers e Streamers</option>
                </select>
                <label>Valor disponível</label>
                <input type="text" name="Budget" id="Budget">

                <button type="submit" class="btn btn-info">Buscar</button>
            </form>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Processador</th>
                        <th scope="col">Placa Mãe</th>
                        <th scope="col">Memória</th>
                        <th scope="col">SSD</th>
                        <th scope="col">HD</th>
                        <th scope="col">Vídeo</th>
                        <th scope="col">Cooler</th>
                        <th scope="col">Fonte</th>
                        <th scope="col">Gabinete</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Linha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <th scope="row"><?= $produto['id'] ?></th>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['processador'] ?></td>
                        <td><?= $produto['placamae'] ?></td>
                        <td><?= $produto['memoria'] ?></td>
                        <td><?= $produto['ssd'] ?></td>
                        <td><?= $produto['hd'] ?></td>
                        <td><?= $produto['placavideo'] ?></td>
                        <td><?= $produto['cooler'] ?></td>
                        <td><?= $produto['fonte'] ?></td>
                        <td><?= $produto['gabinete'] ?></td>
                        <td><?= $produto['preco'] ?></td>
                        <td><?= $produto['quantidade'] ?></td>
                        <td><?= $produto['linha'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('rodape.php'); ?>