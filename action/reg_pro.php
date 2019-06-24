<?php

include "../database/conexion.php";

$con=conectar();

$cedpro=$_POST['cedul_prop'];
$nombpro=$_POST["nombr_prop"];
$apellpro=$_POST['apell_prop'];
$celpro=$_POST["celul_prop"];
// $telefpro=$_POST['telef_prop'];
$correopro=$_POST["correo_pro"];
$direccpro=$_POST["direcc_pro"];


// $query="INSERT INTO tabla_prop  (cedul_prop,nombr_prop,apell_prop,celul_prop,telef_prop,correo_pro,direcc_pro) VALUES (:cedul_prop,:nombr_prop,:apell_prop,:celul_prop,:telef_prop,:correo_pro,:direcc_pro)";
$query="INSERT INTO tabla_prop (cedul_prop,nombr_prop,apell_prop,celul_prop,correo_pro,direcc_pro) VALUES (:cedul_prop,:nombr_prop,:apell_prop,:celul_prop,:correo_pro,:direcc_pro)";


$resultado=$con->prepare($query);

$resultado->bindParam(":cedul_prop",$cedpro);
$resultado->bindParam(":nombr_prop",$nombpro);
$resultado->bindParam(":apell_prop",$apellpro);
$resultado->bindParam(":celul_prop",$celpro);
// $resultado->bindParam(":telef_prop",$telefpro);
$resultado->bindParam(":correo_pro",$correopro);
$resultado->bindParam(":direcc_pro",$direccpro);


if($resultado->execute()){

  $id=$_GET["id"];
  $query="UPDATE tabla_sepu SET cedul_prop=:ced WHERE codig_sepu=:codi";
  $resultado=$con->prepare($query);
  $resultado->bindParam(":ced",$cedpro);
  $resultado->bindParam(":codi",$id);

  if($resultado->execute()){
     // header('location:../vistas/propietario.php?exi=Insertado correctamente');
    header("location:../vistas/sepulcros.php?exi=Propietario insertado correctamente, llene los datos de sepulcro");

  }
 

}else {

  header('location:../vistas/propietario.php?err=Hubo un error al insertar, vuelve a intentarlo');

}



?>