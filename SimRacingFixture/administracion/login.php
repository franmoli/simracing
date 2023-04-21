<!DOCTYPE html>
<html>
  <?php include('templates/head.php'); ?>

  <body class="bg-login">
    <div class="container">
        <div class="contenedor-logeo bottom-center">
          <div class="cuadro-logeo text-center">
            <!-- Header -->
            <header class="header-cuadro-logeo">
              <img src="img/logo.png" alt="Logo">
            </header>
            
            <br> <br> <br> <br>

            <h1>Iniciar Sesión</h1>
            
            <br>

            <!-- Formulario -->
            <form id="form-logeo" action="#">
              <div class="username">
                <div class="label-container">
                  <label for="username" class="text-left bg-gray">&nbsp; NOMBRE DE USUARIO</label> <br>
                </div>
                <input type="text" name="username" id="username" class="bg-gray">
              </div>

              <br>

              <div class="password">
                <div class="label-container">
                  <label for="password" class="text-left bg-gray">&nbsp; CONTRASEÑA</label> <br>
                </div>
                <input type="password" name="password" id="password" class="bg-gray">
              </div>

              <br>

              <!-- <div class="stay-loged text-center">
                <label class="checkbox-label">
                  <input type="checkbox" name="stay-loged" id="stay-loged">
                  <span class="checkbox-design"></span>
                  <span class="checkbox-text">PERMANECER CONECTADO</span>
                </label>
              </div> -->

              <br>

              <div class="send-login">
                <button type="submit">
                  <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </form>

            <br>

            <!-- Opciones -->
            <div class="opciones text-center">
              <a href="noPuedesIniciarSesion.php">¿NO PUEDES INICIAR SESIÓN?</a>

              <br>

              <a href="register.php">CREAR CUENTA</a>
            </div>
          </div>
        </div>
    </div>

    <div class="contenedor-idiomas top-center">
      <div class="lenguajes text-left">
        <?php include('templates/selector-lenguajes.php'); ?>
      </div>
    </div>

    <!-- Scripts -->
    <?php include('templates/scripts.php'); ?>
  </body>
</html>