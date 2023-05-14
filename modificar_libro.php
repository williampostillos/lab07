<?php
include "modelo/conexion.php";

$idLibro=$_GET["idLibro"];

$sql=$conexion->query("select * from libro where idLibro='$idLibro'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary p-3">Modificar Libros</h3>
        <input type="hidden" name="idLibro" value="<?= $_GET["idLibro"] ?>">
        <?php
        include "controlador/modificar_libro.php";
        while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Año</label>
                <input type="number" class="form-control" id="año" name="año" value="<?= $datos->año ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID del Autor</label>
                <input type="number" class="form-control" id="idAutor" name="idAutor" value="<?= $datos->idAutor ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo"value="<?= $datos->titulo ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="<?= $datos->url ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad" value="<?= $datos->especialidad ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" value="<?= $datos->editorial ?>" required>
            </div>
        <?php }
        ?>
        
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
