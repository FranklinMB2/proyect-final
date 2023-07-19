<?php
include "modelo/conexion.php";

// recogemos el id del producto que se encuentra en la url y lo almacenamos dentro de una variable
$id = $_GET["id"];

// una vez que ya almacenamos el id hacemos una consulta a la base de datos y le decimos que traiga todos los datos del registro que tenga ese id
// almacenamos la consulta 
$sql = $conexion->query(" select * from productos where id=$id ");

?>

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
    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center alert alert-secondary"> Modificar Productos </h5>

        <!-- mostramos el id y lo ocultamos con el hidden esto nos sirve para validar el id del producto -->
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

        <?php
        include "controlador/validar_modificar_producto.php";
        // mostramos la consulta y recorremos los datos

        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $datos->nombre ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="<?= $datos->precio ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad" value="<?= $datos->cantidad ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $datos->descripcion ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Id_categoria</label>
                <input type="text" class="form-control" name="id_categoria" id="id_categoria" value="<?= $datos->id_categoria ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="codigo" id="codigo" value="<?= $datos->codigo ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Activo</label>
                <input type="text" class="form-control" name="activo" id="activo" value="<?= $datos->activo ?>">
            </div>
        <?php }
        ?>

        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="registrar">Modificar Producto</button>

            </div>
            <a href="home.php" class="btn btn-success">Home</a>
        </div>

        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>