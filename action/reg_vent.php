<?php

include "../database/conexion.php";

$con=conectar();

$cedcomp=$_POST['cedul_comp'];
$nombcomp=$_POST["nombr_comp"];
$apellcomp=$_POST['apell_comp'];
$celcomp=$_POST["celul_comp"];
$telefcomp=$_POST['telef_comp'];
$correocomp=$_POST["correo_com"];
$direcccomp=$_POST["direcc_com"];


$query="INSERT INTO tabla_prop  (
  cedul_prop,
  nombr_prop,
  apell_prop,
  celul_prop,
  telef_prop,
  correo_pro,
  direcc_pro) VALUES (:cedul_comp,:nombr_comp,:apell_comp,:celul_comp,:telef_comp,:correo_com,:direcc_com)";


$resultado=$con->prepare($query);

$resultado->bindParam(":cedul_comp",$cedcomp);
$resultado->bindParam(":nombr_comp",$nombcomp);
$resultado->bindParam(":apell_comp",$apellcomp);
$resultado->bindParam(":celul_comp",$celcomp);
$resultado->bindParam(":telef_comp",$telefcomp);
$resultado->bindParam(":correo_com",$correocomp);
$resultado->bindParam(":direcc_com",$direcccomp);


if($resultado->execute()){

  $con=conectar();

  // $query="UPDATE tabla_sepu SET  cedul_prop=:ced WHERE codig_sepu=:id";
  $sql = "UPDATE `tabla_sepu` (	codig_vent,fecha_vent,descr_vent,cog_sep ) VALUES (	:codig_vent,:fecha_vent,descr_vent,cog_sep )";
  $id=$_GET["id"];
  $resultado=$con->prepare($sql);

  $resultado->bindParam(":ced",$cedcomp);
  $resultado->bindParam(":id",$id);

 if($resultado->execute()){

  $con=conectar();

  // $query="UPDATE tabla_sepu SET  cedul_prop=:ced WHERE codig_sepu=:id";
  $sql = "INSERT `tabla_vent` SET `cedul_prop` = :ced WHERE `tabla_sepu`.`codig_sepu` = :id";
  $id=$_GET["id"];
  $resultado=$con->prepare($sql);

  $resultado->bindParam(":ced",$cedcomp);
  $resultado->bindParam(":id",$id);




  header('location:../vistas/sepulcros.php?exi=Insertado correctamente');

 }else {
   echo "no actualizo";
 }

  


  // header('location:../vistas/home.php?exi=Insertado correctamente');

}else {

  header('location:../vistas/home.php?err=Hubo un error al insertar, vuelve a intentarlo');

}



?>