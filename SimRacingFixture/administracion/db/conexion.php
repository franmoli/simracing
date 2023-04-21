<?php
    // Servidor - Usuario - Clave - BD
    $con = new mysqli('localhost', 'root', 'root', 'simracing_fixture');
    // Si no puedo conectar arrojo a la página de error
    if($con->connect_error){
        echo '<meta http-equiv="refresh" content="0; url=500.html">';
    }
    // Seteo los caracteres de UTF-8
    $con->set_charset('utf8');
?>