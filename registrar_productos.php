<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Modificar Productos</title>
</head>
    <body>

    <h1 class="text-center p-3">FORMULARIO CRUD</h1>
        <?php
            include "modelo/conexion.php";
            
        ?>
        <div class="container-fluid row">
            <form class="col-4 p-3 m-auto" method="POST">
                    <h5 class="text-center alert alert-secondary"> Registro de Productos </h5>
                    <?php
                    include "controlador/registro_producto.php";
                    ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio" id="precio">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Id_categoria</label>
                    <input type="text" class="form-control" name="id_categoria" id="id_categoria">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Codigo</label>
                    <input type="text" class="form-control" name="codigo" id="codigo">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Activo</label>
                    <input type="text" class="form-control" name="activo" id="activo">
                </div>

                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="registrar">Registrar Producto</button>
                  
                </div>
                <a href="home.php" class="btn btn-success">Home</a>
              </div>

                
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>