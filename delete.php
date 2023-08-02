phpCopy code
<?php
require 'db.php';

$id = $_GET['id'];

$conexion->exec("DELETE FROM usuarios WHERE id = $id");
header('Location: index.php');
?>
