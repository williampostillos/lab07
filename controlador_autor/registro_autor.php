<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["ape_paterno"]) and !empty($_POST["ape_materno"])){
        $nombre=$_POST["nombre"];
        $ape_paterno=$_POST["ape_paterno"];
        $ape_materno=$_POST["ape_materno"];

        $sql=$conexion->query("insert into author(nombre,ape_paterno,ape_materno) values('$nombre','$ape_paterno','$ape_materno')");

        if($sql==1){
            echo '<div class="alert alert-success">Autor registrado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }

    }else{
        echo '<div class="alert alert-warning">Error</div>';
    }
}
?>