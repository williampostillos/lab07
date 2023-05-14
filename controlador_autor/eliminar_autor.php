<?php

if(!empty($_GET["idAutor"])){
    $idAutor=$_GET["idAutor"];
        $sql=$conexion->query("delete from author where idAutor='$idAutor'");
        if($sql==1){
            echo '<div class="alert alert-warning">Autor eliminado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar autor</div>';
        }
    }
?>
