<?php
include("database.php");
//Iniciar sesión
session_start();

$nombre_usuario = validar_campo($_POST["nombre_usuario"]);

if (!isset($_SESSION["id_usuario"])) {
    echo "<script> alert('Bienbenido $nombre_usuario');
    window.location='home.php' </script>";
}


//Función para validar campos
function validar_campo($campo)
{
    $campo = trim($campo); //Quita espacios
    $campo = stripslashes($campo); //Quita las barras de un string
    $campo = htmlspecialchars($campo); //Convierte caracteres especiales en entidades HTML
    return $campo;
}

// Validar campos
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Obtenemos datos del metodo Post

    $nombre_usuario = validar_campo($_POST["nombre_usuario"]);
    $password = validar_campo($_POST["password"]);

    // Validar nombre_usuario
    if (empty($nombre_usuario)) {

        $_SESSION["usuario_error"] = "El nombre de usuario  es obligatorio";
        header("Location: login.php");
        exit();
    }

    // Validar contraseña
    if (empty($password)) {
        $_SESSION["password_error"] = "La contraseña es obligatoria";
        header("Location: login.php");
        exit();
    } else {

        $sql = "SELECT id FROM usuario WHERE nombre_usuario ='$nombre_usuario' AND password = '$password'";
        $resultado = $conn->query($sql);
        $rows = $resultado->num_rows;

        if ($rows > 0) {
            $row = $resultado->fetch_assoc();
            $_SESSION["id_usuario"] = $row["id"];
            echo "<script> alert('Bienbenido $nombre_usuario');
            window.location='home.php' </script>";
        } else {
            $_SESSION["password_error"] = "La contraseña o el usuario son incorrecta";
            header("Location: login.php");
            exit();
        }
    }
}
