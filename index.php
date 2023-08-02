<?php
require 'db.php';

$usuarios = $conexion->query("SELECT * FROM test.usuarios")->fetchAll(PDO::FETCH_OBJ);
//$datos = $conexion->query("SELECT * FROM test.usuarios");
?>

<!DOCTYPE html>
<html>
<body>
    <ul>
    <?php foreach ($usuarios as $usu): ?>
        <li><?php echo($usu->nombre." ".$usu->correo)?></li>
    <?php endforeach?>
    </ul>
    
</body>
</html>