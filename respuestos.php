<?php

require 'config/config.php';
require 'config/database1.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare(" SELECT id, nombre, precio FROM productos WHERE id_categoria = 3 ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respuestos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">
     <link href="css/estilo.css" rel="stylesheet">
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

    <!-- carrusel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/repuesto1.jpg" class="d-block w-100" alt="general">
            </div>
            <div class="carousel-item">
                <img src="img/repuesto2.jpg" class="d-block w-100" alt="general">
            </div>
            <div class="carousel-item">
                <img src="img/repuesto3.jpg" class="d-block w-100" alt="general">
            </div>
            <div class="carousel-item">
                <img src="img/respuesto.jpg" class="d-block w-100" alt="general">
            </div>
            <div class="carousel-item">
                <img src="img/repuesto4.jpg" class="d-block w-100" alt="general">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($resultado as $row) {?>
        <div class="col">
          <div class="card shadow-sm">
          <?php 

          $id = $row['id'];
          $imagen = "images/productos/" . $id . "/principal.jpg";

          if (!file_exists($imagen)) {
            $imagen = "images/no-photo.png";
          }


          ?>
            <img src="<?php echo $imagen; ?>" class="d-block w-100">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
              <p class="card-text">$<?php echo number_format($row['precio'], 2, '.', ','); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="detalle.php?id=<?php echo $row['id']; ?>&token=<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>
                  " class="btn btn-primary">Detalles</a>
                  
                </div>
                <a href="" class="btn btn-success">Agregar</a>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>