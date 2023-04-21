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

            <h1>¿No puedes acceder?</h1>
            
            <br>
            <h4>Ingresa tu correo para enviarte una nueva clave de acceso</h4>
            

            <!-- Formulario -->
            <form id="form-recuperacion" action="#">
              <div class="username">
                <div class="label-container">
                  <label for="username" class="text-left bg-gray">&nbsp; EMAIL</label> <br>
                </div>
                <input type="text" name="username" id="username" class="bg-gray">
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
                <button type="submit" >
                  <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </form>

            <br>

            <!-- Opciones -->
            <div class="opciones text-center">
              <a href="login.php">INICIAR SESIÓN</a>

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