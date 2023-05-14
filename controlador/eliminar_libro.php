<?php

if(!empty($_GET["idLibro"])){
    $idLibro=$_GET["idLibro"];
        $sql=$conexion->query("delete from libro where idLibro='$idLibro'");
        if($sql==1){
            echo '<div class="alert alert-warning">Libro eliminado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar libro</div>';
        }
    }
?>
