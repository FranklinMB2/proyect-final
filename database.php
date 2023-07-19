<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "base_del_proyecto";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    echo "No hay conexión: " .mysqli_connect_error();
}


?>