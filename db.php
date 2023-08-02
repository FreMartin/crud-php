<?php
$host = "localhost";
$db   = "test";
$user = "root";
$pass = "ElMartin";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo('Conexion exitosa');
    $conexion->exec("insert into test.usuarios (nombre, correo) values ('Juan','Perez');")
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>