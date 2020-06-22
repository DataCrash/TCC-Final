<?php

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

include('/server/clientes.php');

editar( $_POST );

header( 'Location: /client/clientes-listar-admin.php' );

?>
