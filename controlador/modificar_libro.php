<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["año"]) and !empty($_POST["idAutor"]) and !empty($_POST["titulo"]) and !empty($_POST["url"]) and !empty($_POST["especialidad"]) and !empty($_POST["editorial"])){
        $idLibro = $_POST["idLibro"];
        $año=$_POST["año"];
        $idAutor=$_POST["idAutor"];
        $titulo=$_POST["titulo"];
        $url=$_POST["url"];
        $especialidad=$_POST["especialidad"];
        $editorial=$_POST["editorial"];

        $sql = $conexion->query("UPDATE libro SET año ='$año',idAutor ='$idAutor',titulo ='$titulo',url ='$url',especialidad ='$especialidad',editorial ='$editorial' WHERE idLibro ='$idLibro'");
        if($sql){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Error al editar Libro </div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Error</div>";
    }
}

?>