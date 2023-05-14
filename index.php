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
    <h1 class="text-center p-3">Lista de Libros</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_libro.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
            <h3 class="text-center p-3">Registro de libros</h3>
            <?php
            include "controlador/registro_libro.php";
            ?>
<!--id, año, autor, titulo, URL de ubicación del recurso, especialidad y editorial   id, nombre, apellido paterno, apellido materno-->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Año</label>
                <input type="number" class="form-control" id="año" name="año" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID del Autor</label>
                <input type="number" class="form-control" id="idAutor" name="idAutor" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="url" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
        <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Año</th>
      <th scope="col">Nombre del Autor</th>
      <th scope="col">Apellido Paterno del autor</th>
      <th scope="col">Apellido Materno del autor</th>
      <th scope="col">Titulo</th>
      <th scope="col">URL</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Editorial</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  include "modelo/conexion.php";
  $sql=$conexion->query("select * from libro inner join author on libro.idAutor=author.idAutor");
  if ($sql) {
      while($datos=$sql->fetch_object()) {?>
          <tr>
          <th><?= $datos->idLibro ?></th>
          <td><?= $datos->año ?></td>
          <td><?= $datos->nombre ?></td>
          <td><?= $datos->ape_paterno ?></td>
          <td><?= $datos->ape_materno ?></td>
          <td><?= $datos->titulo ?></td>
          <td><?= $datos->url ?></td>
          <td><?= $datos->especialidad ?></td>
          <td><?= $datos->editorial ?></td>
          <td>
              <a href="modificar_libro.php?idLibro=<?= $datos->idLibro ?>" class="btn btn-small btn-warning">Editar</a>
              <a href="index.php?idLibro=<?= $datos->idLibro ?>" class="btn btn-small btn-danger">Eliminar</a>
        </td>
      </tr>
      <?php }
  } else {
      echo "Error al ejecutar la consulta: " . $conexion->error;
  }
  ?>
</tbody>

</table>

<a href="vista_autor.php" class="btn btn-primary mt-4">Autores</a>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
