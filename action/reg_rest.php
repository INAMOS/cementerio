<?php 
 include "../database/conexion.php";

    $con=conectar();
    $ced=$_GET["ced"];
    $fechex=$_POST["fecha_exhu"];
    $descrex=$_POST["descr_exhu"];
    $id=$_GET["id"];

 $query="INSERT INTO tabla_exhu (fecha_exhu, descr_exhu,cedul_c,cod_sep) VALUES (:fecha_exhu,:descr_exhu,:cedul_c,:cod_sep)";

 $result=$con->prepare($query);

 $result->bindParam(":fecha_exhu",$fechex);
 $result->bindParam(":descr_exhu",$descrex);
 $result->bindParam(":cedul_c",$ced);
 $result->bindParam(":cod_sep",$id);


 if($result->execute()){


  $con=conectar();
  $ced=$_GET["ced"];
  $value=1;


  $query="UPDATE tabla_cadv SET restero=:res WHERE cedul_cadv=:ced";

  $result=$con->prepare($query);

  $result->bindParam(":res",$value);
  $result->bindParam(":ced",$ced);

  if($result->execute()){

    header("location:../vistas/cadaveres.php?id=$id&exi=ingreso correctamente");

  }

    
  
  }else {
  
    header("location:../vistas/cadaveres.php?id=$id");
  
  }
  




?>