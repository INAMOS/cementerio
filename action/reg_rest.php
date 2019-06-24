<?php 
 include "../database/conexion.php";

    $con=conectar();
    $ced=$_GET["ced"];
    $fechex=$_POST["fecha_exhu"];
    $descrex=$_POST["descr_exhu"];


 $query="INSERT INTO tabla_exhu (fecha_exhu, descr_exhu,cedul_c) VALUES (:fecha_exhu, :descr_exhu,:cedul_c)";

 $result=$con->prepare($query);

 $result->bindParam(":fecha_exhu",$fechex);
 $result->bindParam(":descr_exhu",$descrex);
 $result->bindParam(":cedul_c",$ced);

 $id=$_GET["id"];
 if($result->execute()){


    header("location:../vistas/cadaveres.php?id=$id");
  
  }else {
  
    header("location:../vistas/cadaveres.php?id=$id");
  
  }
  




?>


