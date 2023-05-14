<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["ape_paterno"]) and !empty($_POST["ape_materno"])){
        $idAutor=$_GET['idAutor'];
        $nombre=$_POST["nombre"];
        $ape_paterno=$_POST["ape_paterno"];
        $ape_materno=$_POST["ape_materno"];
        $sql = $conexion->query("UPDATE author SET nombre ='$nombre',ape_paterno ='$ape_paterno',ape_materno ='$ape_materno' WHERE idAutor ='$idAutor'");
        if($sql){
            header("location:vista_autor.php");
        }else{
            echo "<div class='alert alert-danger'>Error al editar Autor </div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Error</div>";
    }
}

?>
