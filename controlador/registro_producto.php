<?php

// validamos cuando el usuario preciona el boton y lo valida y tambien verificamos que todos los campos no esten vacios
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"]) 
    and !empty($_POST["descripcion"]) and !empty($_POST["id_categoria"]) and !empty($_POST["codigo"]) 
    and !empty($_POST["activo"])) {
        
        // almacenamos los datos que el usuario ingrese
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $cantidad=$_POST["cantidad"];
        $descripcion=$_POST["descripcion"];
        $id_categoria=$_POST["id_categoria"];
        $codigo=$_POST["codigo"];
        $activo=$_POST["activo"];

        // colocamos los campos que tenemos en la tabla persona para q se puedan evaluar
        // como los campos son de tipo cadena se le colocan las comillas simples pero si fueran de tipo numerico se colocarian sin las comillas 
        $sql=$conexion->query(" insert into productos(nombre,precio,cantidad,descripcion)values('$nombre','$precio','$cantidad','$descripcion', '$id_categoria', '$codigo', '$activo') ");
        
        if ($sql==1) {
            echo '<div class="alert alert-success">Producto Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error de Registro</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}

?>