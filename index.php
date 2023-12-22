<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en php mysql</title>
    <!-- CSS only --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/67204f7488.js" crossorigin="anonymous"></script>
</head>

<body style="background-color:hsl(243deg 33.01% 63.78% / 96%);">
    <script>  
        function eliminar(){
            var respuesta=confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script> 

    <h1 class= "text-center p-3" >CRUD EN PHP-MySQL | Saltos Brandon</h1>
    <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_persona.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
            <h3 class= "text-center text-secondary p-4">Registro de personal </h3>
            <?php
            
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cédula</label>
                <input type="text" class="form-control" name="ci" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo electrónico</label>
                <input type="email" class="form-control" name="correo" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary" name= "btnregistrar" value= "ok">Guardar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table table-striped">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Cédula</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query(" select * from persona ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?=$datos->ID_persona ?></td>
                            <td><?=$datos->nombres ?></td>
                            <td><?=$datos->apellidos ?></td>
                            <td><?=$datos->cedula ?></td>
                            <td><?=$datos->fecha_nacimiento ?></td>
                            <td><?=$datos->correo ?></td>
                            <td>
                                <a href= "modificar_persona.php?ID=<?= $datos->ID_persona ?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?ID=<?= $datos->ID_persona ?>" class="btn btn-samll btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <!--JavaScript Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>