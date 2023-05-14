<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">Lista de Autores</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador_autor/eliminar_autor.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
            <h3 class="text-center p-3">Registro de autores</h3>
            <!--id, nombre, apellido paterno, apellido materno-->

            <?php
            include "controlador_autor/registro_autor.php";
            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="ape_paterno" name="ape_paterno" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="ape_materno" name="ape_materno" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
        <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  include "modelo/conexion.php";
  $sql=$conexion->query("select * from author");
  if ($sql) {
      while($datos=$sql->fetch_object()) {?>
          <tr>
          <th><?= $datos->idAutor ?></th>
          <td><?= $datos->nombre ?></td>
          <td><?= $datos->ape_paterno ?></td>
          <td><?= $datos->ape_materno ?></td>
          <td>
              <a href="modificar_autor.php?idAutor=<?= $datos->idAutor ?>" class="btn btn-small btn-warning">Editar</a>
              <a href="vista_autor.php?idAutor=<?= $datos->idAutor ?>" class="btn btn-small btn-danger">Eliminar</a>
        </td>
      </tr>
      <?php }
  } else {
      echo "Error al ejecutar la consulta: " . $conexion->error;
  }
  ?>
</tbody>

</table>
<a href="index.php" class="btn btn-primary mt-4">Libros</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
