<?php 
 include "../database/conexion.php";

 $con=conectar();

    $fechex=$_POST["fecha_exhu"];
    $descrex=$_POST["descr_exhu"];


 $query="INSERT INTO tabla_exhu (fecha_exhu, descr_exhu) VALUES (:fecha_exhu, :descr_exhu)";

 $result=$con->prepare($query);

 $result->binParam(":fecha_exhu,$fechex");
 $result->binParam(":descr_exhu,$descrex");

 if($result->execute()){

    header("location:../vistas/restero.php?exi=Propietario insertado correctamente, llene los datos de sepulcro&ced=$cedpro");
  
  }else {
  
    header('location:../vistas/restero.php?err=Hubo un error al insertar, vuelve a intentarlo');
  
  }
  




?>


