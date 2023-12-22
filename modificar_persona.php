<?php
include "modelo/conexion.php";
$ID=$_GET["ID"];
$sql=$conexion->query(" select * from persona where ID_persona= $ID ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style= "background-color:hsl(243deg 33.01% 63.78% / 96%);">
    <form class="col-4 m-auto" method="POST">
        <h3 class= "text-center text-secondary p-4">Modificar personal </h3>
        <imput type= "hidden" name="ID" value= "<?= $_GET["ID"] ?>">
        <?php
        include "controlador/modificar_persona.php";
        while ($datos=$sql->fetch_object()) {?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" aria-describedby="emailHelp" value="<?=$datos->nombres ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" aria-describedby="emailHelp" value="<?=$datos->apellidos ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cédula</label>
                <input type="text" class="form-control" name="ci" aria-describedby="emailHelp" value="<?=$datos->cedula ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha" aria-describedby="emailHelp" value="<?=$datos->fecha_nacimiento ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo electrónico</label>
                <input type="email" class="form-control" name="correo" aria-describedby="emailHelp" value="<?=$datos->correo ?>">
            </div>
        <?php }
        ?>
        

        <button type="submit" class="btn btn-primary" name= "btnregistrar" value= "ok">Modificar</button>
    </form>
</body>
</html>
