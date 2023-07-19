<?php
// Iniciar sesión
session_start();
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="img/logo3.png">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-outline-success me-2" type="button" aria-current="page" href="index.php">Principal</a>
          </li>
          <li class="nav-item dropdown">
            <a class="btn btn-outline-success me-2 dropdown-toggle" type="button" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Opciones
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="respuestos.php">Respuestos</a></li>
              <li><a class="dropdown-item" href="herramientas.php">Herramientas</a></li>
              <li><a class="dropdown-item" href="accesorios.php">Accesorios</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-outline-success me-2" type="button" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-success me-2" type="button" href="registro.php">Registro</a>
        </li>
      </ul>
    </div>
  </nav>


  


  <!-- Section: Design Block -->
  <div class="wrapper bg-white">
        <div class="h2 text-center">Central Space Center</div>
        <div class="h4 text-muted text-center pt-2">Registrate</div>
        <form class="pt-3" action="validar_registro.php" method="post">
            <div class="form-group py-2">
                <div class="input-field">
                    <span class="far fa-user p-2"></span>
                    <input type="text" placeholder="Primer Nombre" name="primer_nombre">
                </div>
            </div>
            <?php if (isset($_SESSION["nombre_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["nombre_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Segundo Nombre" name="segundo_nombre" >
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Primer Apellido" name="primer_apellido">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["apellido1_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["apellido1_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Segundo Apellido" name="segundo_apellido">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["apellido2_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["apellido2_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Telefono" name="telefono">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["telefono_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["telefono_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Identificacion" name="identificacion">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["identificacion_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["identificacion_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Direccion" name="direccion">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["direccion_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["direccion_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Nombre de Usuario" name="nombre_usuario">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["usuario_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["usuario_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="email" placeholder="Email" name="email">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["email_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["email_error"]; ?></div>
            <?php } ?>

            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="password" placeholder="Contraseña" name="password">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <?php if (isset($_SESSION["password_error"])) { ?>
                <div class="alert alert-danger mt-2"><?php echo $_SESSION["password_error"]; ?></div>
            <?php } ?>

            <div class="d-flex align-items-start">
                <div class="remember">
                    <label class="option text-muted"> Recuerdame
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <button class="btn btn-block text-center my-3" type="submit">Registrar</button>
            <div class="text-center pt-3 text-muted">Si ya te registrarte? <a href="login.php">Login</a></div>
        </form>
    </div>

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Productos
            </h6>
            <p>
              <a href="accesorios.php" class="text-reset">Acesorios</a>
            </p>
            <p>
              <a href="herramientas.php" class="text-reset">Heramientas</a>
            </p>
            <p>
              <a href="respuestos.php" class="text-reset">Respuestos</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> Quibdó, Chocó, Colombia</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              elkin
            </p>
            <p><i class="fas fa-phone me-3"></i> 312 269 3571</p>
            <p><i class="fas fa-print me-3"></i> 312 268 35 71</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Proyecto_nuevo.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>
<?php
// Limpiar los mensajes de error después de mostrarlos en el formulario
unset($_SESSION["nombre_error"]);
unset($_SESSION["apellido1_error"]);
unset($_SESSION["apellido2_error"]);
unset($_SESSION["telefono_error"]);
unset($_SESSION["direccion_error"]);
unset($_SESSION["identificacion_error"]);
unset($_SESSION["usuario_error"]);
unset($_SESSION["email_error"]);
unset($_SESSION["password_error"]);

?>