<div class="container">
    <div class="Formequip">
        <form class="equip" method="Post" action="/formequip-listar.php" onsubmit="">
            <label>Necessidade do equipamento</label>
            <select name="Uso" id="tipouso">
                <option value="0">Dia a dia</option>
                <option value="1">Soluções Corporativas</option>
                <option value="2">Gamers e Streamers</option>
            </select>
            <label>Valor disponível</label>
            <input type="text" name="Budget" id="Budget">

            <button type="submit" class="btn btn-budget">Buscar</button>
        </form>
    </div>
</div>