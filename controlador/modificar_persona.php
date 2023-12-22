<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["ci"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        //$ID=$_POST["ID"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $ci=$_POST["ci"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" update persona set nombres='$nombres', apellidos='$apellidos', cedula='$ci', fecha_nacimiento='$fecha', correo='$correo' where ID_persona=$ID");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class= 'alert alert danger'>Error al modificar personal</div>";
        }
        
    }else{
        echo "<div class= 'alert alert warning'>campos vacios</div>";
    }
}
?>