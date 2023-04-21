<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Información del Usuario</li>
            <!-- Usuarios -->
            <li class="usuarios treeview">
              <a href="#"><i class="fas fa-users"></i></i> <span>Mi Cuenta</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="modificar-perfil.php?tipo=usuario">Información personal</a></li>
                <?php 
                  if($_SESSION['trabajador']){
                ?>
                    <li><a href="modificar-perfil.php?tipo=trabajador">Descripción laboral</a></li>
                <?php 
                  }
                ?>
              </ul>
            </li>
            <!-- Pedidos -->
            <li><a href="mis-pedidos.php"><i class="fa fa-store"></i> <span>Mis pedidos</span></a></li>

            <li class="header">Información de los servicios</li>
            <!-- Servicios -->
            <li class="servicios treeview">
              <a href="#"><i class="fab fa-servicestack"></i> <span>Mis Servicios</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="mi-certificado.php">Certificados SSL</a></li>
                <li><a href="mi-dominio.php">Dominios Web</a></li>
                <li><a href="mi-hosting.php">Hosting Web</a></li>
                <li><a href="mi-proyecto.php">Proyectos Web</a></li>
                <li><a href="mi-soporte.php">Soporte Técnico</a></li>
              </ul>
            </li>

            <?php 
              if($_SESSION['administrador'] >= 1){
            ?>
                <li class="header">Administradores</li>
                <li><a href="../administracion/index.php"><i class="fa fa-tools"></i> <span>Acceder al panel</span></a></li>
            <?php 
              }
            ?>

            <li class="header">Acciones</li>
            <!-- Hacer una reseña -->
            <li><a href="mi-reseña.php"><i class="far fa-comment"></i> <span>Dejar reseñas</span></a></li>
            <!-- Cerrar sesión -->
            <li><a href="php/cerrar-sesion.php"><i class="fa fa-sign-out-alt"></i> <span>Cerrar sesión</span></a></li>
        </ul>
    </section>
</aside>