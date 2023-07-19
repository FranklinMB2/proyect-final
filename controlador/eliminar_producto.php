<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from productos where id=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success text-center">El registro del producto se ha eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger text-center>Ha ocurrido un error a la hora de eliminar el registro del producto</div>';        
    }
    
}

?>