<!-- Cargo la informacion del usuario actual de la base de datos -->
<?php 
    
?>

<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- Logo Responsive -->
        <span class="logo-mini"><b>SRF</b></span>
        <!-- Logo -->
        <span class="logo-lg"><b>SRF</b>ixture</span>
    </a>

    <!-- Navegacion -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Habilitacion de la Barra de Navegacion -->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Abrir barra de navegación</span>
        </a>
        <!-- Menu del Usuario -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Información del Usuario -->
              <li class="dropdown user user-menu usuario-header">
                  <a>
                    <img src="../<?php echo $usuario['foto']; ?>" class="user-image" alt="Foto de Usuario">
                    <span class="hidden-xs"><?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?></span>
                  </a>
              </li>
              <!-- Volver al Sitio -->
              <li>
                <a href="../index.php"><i class="fa fa-backward"></i></a>
              </li>
            </ul>
        </div>
    </nav>
</header>