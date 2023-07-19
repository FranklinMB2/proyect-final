<?php
// Iniciar sesión
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <a href="perfil2.php" class="btn btn-success" type="submit" aria-pressed="true">Datos Basicos</a>

                            <a href="datos_perfil.php" class="btn btn-success" type="submit" aria-pressed="true">Modificar Datos</a>

                        </ol>
                    </nav>
                </div>
            </div>
            <h1 class="mb-5">Modificar Datos</h1>
            <form action="registro.php" method="post">

                <div class="form-group">
                    <label for="nombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="primer_nombre">

                    <?php if (isset($_SESSION["nombre_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["nombre_error"]; ?></div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="nombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="segundo_nombre">

                    <?php if (isset($_SESSION["nombre_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["nombre_error"]; ?></div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="apellido">Primer Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="primer_apellido">

                    <?php if (isset($_SESSION["apellido_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["apellido_error"]; ?></div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="apellido">Segundo Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="segundo_apellido">

                    <?php if (isset($_SESSION["apellido_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["apellido_error"]; ?></div>
                    <?php } ?>
                </div>


                <div class="form-group">
                    <label for="email">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">

                    <?php if (isset($_SESSION["email_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["email_error"]; ?></div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="email">Identificacion</label>
                    <input type="text" class="form-control" id="identificacion" name="identificacion">

                    <?php if (isset($_SESSION["email_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["email_error"]; ?></div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="email">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">

                    <?php if (isset($_SESSION["email_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["email_error"]; ?></div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="email">Nombre Usario</label>
                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario">

                    <?php if (isset($_SESSION["email_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["email_error"]; ?></div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">

                    <?php if (isset($_SESSION["email_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["email_error"]; ?></div>
                    <?php } ?>
                </div>


                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <?php if (isset($_SESSION["password_error"])) { ?>
                        <div class="alert alert-danger mt-2"><?php echo $_SESSION["password_error"]; ?></div>
                    <?php } ?>
                </div>


                <button type="submit" name="modificar" class="btn btn-success">Modificar</button>
            </form>
        </div>
</body>

</html>


