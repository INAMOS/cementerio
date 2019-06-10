<?php

    include "../database/conexion.php";


    $usuario=$_POST['user'];
    $password=$_POST["password"];
    
    
    $conexion=conectar();

    //esta es la consulta a mi base de datos
    $query="SELECT * FROM tabla_usuarios";

    //aqui preparo la consulta a la base de datos
    $result=$conexion->prepare($query);


    //aqui la ejecuto
    $result->execute();

    //aqui traigo todos los resultados
    $filas=$result->fetchAll();

    // echo $filas[0][0]. "\n";
    $us=$filas[0][1];
    $con=$filas[0][2];


    if($usuario==$us && $password==$con){

        session_start();

        $_SESSION["usuario"]=array("nom_usu" => $us);
     
        header("location:../vistas/home.php");
    }
    else{
        header("location:../index.php?error=Datos incorrectos, intentelo de nuevo");
    }



    

?>