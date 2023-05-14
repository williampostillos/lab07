<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["año"]) and !empty($_POST["idAutor"]) and !empty($_POST["titulo"]) and !empty($_POST["url"]) and !empty($_POST["especialidad"]) and !empty($_POST["editorial"])){
        $año=$_POST["año"];
        $idAutor=$_POST["idAutor"];
        $titulo=$_POST["titulo"];
        $url=$_POST["url"];
        $especialidad=$_POST["especialidad"];
        $editorial=$_POST["editorial"];

        $sql=$conexion->query("insert into libro(año,idAutor,titulo,url,especialidad,editorial) values('$año','$idAutor','$titulo','$url','$especialidad','$editorial')");

        if($sql==1){
            echo '<div class="alert alert-success">Libro registrado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }

    }else{
        echo '<div class="alert alert-warning">Error</div>';
    }
}
?>