<?php
include("database.php");
//Iniciar sesión
session_start();


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

    $primer_nombre = validar_campo($_POST["primer_nombre"]);
    $segundo_nombre = validar_campo($_POST["segundo_nombre"]);
    $primer_apellido = validar_campo($_POST["primer_apellido"]);
    $segundo_apellido = validar_campo($_POST["segundo_apellido"]);
    $telefono = validar_campo($_POST["telefono"]);
    $direccion = validar_campo($_POST["direccion"]);
    $identificacion = validar_campo($_POST["identificacion"]);
    $nombre_usuario = validar_campo($_POST["nombre_usuario"]);
    $email = validar_campo($_POST["email"]);
    $password = validar_campo(password_hash($_POST["password"], PASSWORD_BCRYPT));

    // Validar primer nombre
    if (empty($primer_nombre)) {

        $_SESSION["nombre_error"] = "El primer nombre es obligatorio";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $primer_nombre)) {
        $_SESSION["nombre_error"] = "El primer nombre solo puede contener letras y espacios";
        header("Location: registro.php");
        exit();
    }

    // Validar primer apellido
    if (empty($primer_apellido)) {

        $_SESSION["apellido1_error"] = "El primer apellido es obligatorio";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $primer_apellido)) {
        $_SESSION["apeliido1_error"] = "El primer apellido solo puede contener letras y espacios";
        header("Location: registro.php");
        exit();
    }

    // Validar segundo nombre
    if (empty($segundo_apellido)) {

        $_SESSION["apellido2_error"] = "El segundo apellido es obligatorio";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $segundo_apellido)) {
        $_SESSION["apellido2_error"] = "El segundo apellido solo puede contener letras y espacios";
        header("Location: registro.php");
        exit();
    }

    // Validar telefono
    if (empty($telefono)) {

        $_SESSION["telefono_error"] = "El telefono es obligatorio";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("/^\d{7,14}$/", $telefono)) {
        $_SESSION["telefono_error"] = "El telefono solo puede contener numero";
        header("Location: registro.php");
        exit();
    }
    
    // Validar identifiacion
    if (empty($identificacion)) {

        $_SESSION["identificacion_error"] = "La identificacion es obligatoria";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("/^\d{7,14}$/", $identificacion)) {
        $_SESSION["identificacion_error"] = "La identificacion solo puede tener numero";
        header("Location: registro.php");
        exit();
    }

    // Validar direccion
    if (empty($direccion)) {

        $_SESSION["direccion_error"] = "La direccion debe ser obligatoria";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $direccion)) {
        $_SESSION["direccion_error"] = "La direccion solo puede tener letras y espacios";
        header("Location: registro.php");
        exit();
    }



    // Validar nombre_usuario
    if (empty($nombre_usuario)) {

        $_SESSION["usuario_error"] = "El nombre de usuario  es obligatorio";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9\_\-]{4,16}$/", $nombre_usuario)) {
        $_SESSION["usuario_error"] = "El nombre de usuario solo puede letras y numeros";
        header("Location: registro.php");
        exit();
    }

    // Validar email
    if (empty($email)) {

        $_SESSION["email_error"] = "El email es obligatorio";
        header("Location: registro.php");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email_error"] = "El email no es válido";
        header("Location: registro.php");
        exit();
    }

    // Validar contraseña
    if (empty($password)) {

        $_SESSION["password_error"] = "La contraseña es obligatoria";
        header("Location: registro.php");
        exit();
    } elseif (strlen($password) < 8) {
        $_SESSION["password_error"] = "La contraseña debe tener al menos 8 caracteres";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("#[0-9]+#", $password)) {
        $_SESSION["password_error"] = "La contraseña debe incluir al menos un número";
        header("Location: registro.php");
        exit();
    } elseif (!preg_match("#[a-zA-Z]+#", $password)) {
        $_SESSION["password_error"] = "La contraseña debe incluir al menos una letra";
        header("Location: registro.php");
        exit();
    } else {
        $grabar = "INSERT INTO persona (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido,
        identificacion, direccion, telefono, email) 
        values ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido',
        '$identificacion', '$direccion', '$telefono', '$email') ";

        $grabar1 = "SELECT id FROM persona WHERE id=(SELECT MAX(id) FROM persona)";
        $grabar2 = mysqli_query($conn, $grabar1);

        if (mysqli_num_rows($grabar2) > 0) {
            $row = mysqli_fetch_assoc($grabar2);
            $id_persona = $row["id"];
            $grabar3 = "INSERT INTO usuario (nombre_usuario, password, id_persona, id_tipo_usuario ) 
            values ('$nombre_usuario', '$password', '$id_persona', 1)";

            $resultado2 = mysqli_query($conn, $grabar);
            $resultado3 = mysqli_query($conn, $grabar3);
        
        if ($resultado2  and $resultado3) {
            echo "<script> alert('Cliente registrado con exito: $nombre_usuario ya puedes iniciar sesion');
            window.location='login.php' </script>";
        } else {
            echo "Error";
        }
    }
    }
}