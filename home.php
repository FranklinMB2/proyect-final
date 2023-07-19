<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
   crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/1a95a2aa46.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="img/logo3.png">
  
</head>

<body>
<script>
         function eliminar(){
            var respuesta=confirm("Seguro que quieres eliminar este registro?"); 
            return respuesta
        }
    </script>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="danger">
    <div class="container-fluid">
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
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
          <a class="btn btn-outline-success me-2" type="button" href="perfil2.php">Perfil</a>
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
 
    <?php
            include "modelo/conexion.php";
            include "controlador/eliminar_producto.php";
        ?>
            <div class="col-8 p-4">
            <!-- <h5 class="text-center alert alert-primary"> Tabla de Registro de Productos </h5> -->
                <table class="table">
                    <thead class="bg-info text-center alert alert-danger">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">PRECIO</th>
                            <th scope="col">CANTIDAD</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">ID_CATEGORIA</th>
                            <th scope="col">CODIGO</th>
                            <th scope="col">ACTIVO</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql = $conexion->query("select * from productos");
                        while ($datos = $sql->fetch_object()){ ?>
                        <tr>
                                <th><?= $datos->id ?></th>
                                <th><?= $datos->nombre ?></th>
                                <td><?= $datos->precio ?></td>
                                <td><?= $datos->cantidad ?></td>
                                <td><?= $datos->descripcion ?></td>
                                <td><?= $datos->id_categoria ?></td>
                                <td><?= $datos->codigo ?></td>
                                <td><?= $datos->activo ?></td>
                                <td>

                                <!-- ?id=<?= $datos->id ?> este codigo sirve para que cuando el presiona el boton de modificar se pueda llevar el id del producto y lo muestra en la url y es muy importante a la hora de hacer una consulta a la base de datos-->

                                <a href="modificar_producto.php ?id=<?= $datos->id ?>"class="btn btn-smoll btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="home.php ?id=<?= $datos->id ?>"class="btn btn-smoll btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                <a href="registrar_productos.php ?id=<?= $datos->id ?>"class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                        </tr>
                        <?php }
                        ?>
                    
                    </tbody>
                </table>

            </div>
        </div>




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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>

</body>

</html>