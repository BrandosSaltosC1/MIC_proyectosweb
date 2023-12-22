<?php
if (!empty($_GET["ID"])) {
    $ID=$_GET["ID"];
    $sql=$conexion->query(" delete from persona where ID_persona=$ID");
    if ($sql==1) {
        echo "<div class= 'alert alert success'>Persona eliminada correctamente</div>";
    } else {
        echo "<div class= 'alert alert danger'>Error al eliminar</div>";
    }
    
}
?>
