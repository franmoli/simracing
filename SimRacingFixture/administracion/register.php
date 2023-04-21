<!DOCTYPE html>
<html>
  <?php include('templates/head.php'); ?>

  <body class="bg-login">
    <div class="container">
        <div class="contenedor-registro bottom-center">
          <div class="cuadro-logeo text-center">
            <!-- Header -->
            <header class="header-cuadro-logeo">
              <img src="img/logo.png" alt="Logo">
            </header>
            
            <br> <br> <br> <br>

            <h1>Crear Cuenta</h1>
            
            <br>

            <!-- Formulario -->
            <form id="form-register" action="#">
              <div class="name">
                <div class="label-container">
                  <label for="name" class="text-left bg-gray">&nbsp; NOMBRE</label> <br>
                </div>
                <input type="text" name="name" id="name" class="bg-gray">
              </div>

              <br>

              <div class="lastname">
                <div class="label-container">
                  <label for="lastname" class="text-left bg-gray">&nbsp; APELLIDO</label> <br>
                </div>
                <input type="text" name="lastname" id="lastname" class="bg-gray">
              </div>

              <br>

              <div class="email">
                <div class="label-container">
                  <label for="email" class="text-left bg-gray">&nbsp; CORREO ELECTRÓNICO</label> <br>
                </div>
                <input type="text" name="email" id="email" class="bg-gray">
              </div>

              <br>

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

              <div class="solicitar-organizador text-center">
                <label class="checkbox-label">
                  <input type="checkbox" name="solicitar-organizador" id="solicitar-organizador">
                  <span class="checkbox-design"></span>
                  <span class="checkbox-text">QUIERO SER ORGANIZADOR</span>
                </label>
              </div>

              <br>

              <div class="send-login">
                <button type="submit">
                  <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </form>
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