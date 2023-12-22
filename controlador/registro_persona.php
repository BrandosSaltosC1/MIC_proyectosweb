<?php
if(!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["ci"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $ci=$_POST["ci"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];
        
        $sql= $conexion->query(" insert into persona(nombres, apellidos, cedula, fecha_nacimiento, correo)values('$nombres','$apellidos','$ci','$fecha','$correo') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR al registra nueva persona</div>';
        }


    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacio</div>';
    }
    
}
?>