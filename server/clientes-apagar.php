<?php

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

include('/server/clientes.php');

apagar( $_GET['id'] );

header( 'Location: /client/clientes-listar-admin.php' );

?>
