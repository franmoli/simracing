<?php
      // Obtengo el nombre de la página en caso de necesitarlo
      $nombrePagina = $_SERVER['PHP_SELF'];
      // Realizo la verificación de sesión para que no pueda ingresar cualquier usuario 
      
      // Intento conectar a la base de datos
      require('db/conexion.php');
?>

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <title>Administración - SRF</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      
      <!-- Favicon -->

      <!-- Fuentes -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

      <!-- Plugins de CSS -->
            <!-- BOOTSTRAP -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- Bootstrap Selects -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
            <!-- AdminLTE -->
            <link rel="stylesheet" href="css/plugins/AdminLTE/AdminLTE.min.css">
      <!-- Códigos de CSS propios -->
      <link rel="stylesheet" href="css/style-global.css">
      <link rel="stylesheet" href="css/main.css">
            <!-- Tema AdminLTE -->
            <link rel="stylesheet" href="css/plugins/AdminLTE/Temas/simRacingFixture.css">
</head>