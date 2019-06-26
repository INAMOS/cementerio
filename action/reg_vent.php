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


$query="SELECT cedul_prop,
nombr_prop,
apell_prop,
celul_prop,
telef_prop,
correo_pro,
direcc_pro
FROM tabla_prop WHERE cedul_prop=:cedu";

$resultado=$con->prepare($query);

$resultado->bindParam(":cedu",$cedcomp);

$resultado->execute();

$filas=$resultado->fetchAll();

if(isset($filas[0]["cedul_prop"])){

  if($filas[0]["cedul_prop"]==$cedcomp){
    
    $con=conectar();

    // $query="UPDATE tabla_sepu SET  cedul_prop=:ced WHERE codig_sepu=:id";
    $sql = "UPDATE `tabla_sepu`  SET cedul_prop=:ced WHERE cedul_prop=:ced_rem";
    $id=$_GET["id"];
    $ced=$_GET["ced"];
    $resultado=$con->prepare($sql);
  
    $resultado->bindParam(":ced",$cedcomp);
    $resultado->bindParam(":ced_rem",$ced);
  
   if($resultado->execute()){
  
    $con=conectar();
  
    // $query="UPDATE tabla_sepu SET  cedul_prop=:ced WHERE codig_sepu=:id";
    $sql = "INSERT `tabla_vent` SET `cedul_prop` = :ced WHERE `tabla_sepu`.`codig_sepu` = :id";
    $id=$_GET["id"];
    $resultado=$con->prepare($sql);
  
    $resultado->bindParam(":ced",$cedcomp);
    $resultado->bindParam(":id",$id);
  
  
    header('location:../vistas/sepulcros.php?exi=Vendidio el sepulcro');
  
   }else {
    header('location:../vistas/sepulcros.php?err=Error intentelo de nuevo');
  
   }
  

  }

}else {

// $resultado->bindParam(":nombr_comp",$nombcomp);
// $resultado->bindParam(":apell_comp",$apellcomp);
// $resultado->bindParam(":celul_comp",$celcomp);
// $resultado->bindParam(":telef_comp",$telefcomp);
// $resultado->bindParam(":correo_com",$correocomp);
// $resultado->bindParam(":direcc_com",$direcccomp);

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
  $sql = "UPDATE `tabla_sepu`  SET cedul_prop=:ced WHERE cedul_prop=:ced_rem";
  $id=$_GET["id"];
  $ced=$_GET["ced"];
  $resultado=$con->prepare($sql);

  $resultado->bindParam(":ced",$cedcomp);
  $resultado->bindParam(":ced_rem",$ced);

 if($resultado->execute()){

  $con=conectar();

  // $query="UPDATE tabla_sepu SET  cedul_prop=:ced WHERE codig_sepu=:id";
  $sql = "INSERT `tabla_vent` (fecha_vent,cog_sep,ced_com) VALUES (:fecha_vent,:cog_sep,:ced_com) ";
  // $id=$_GET["id"];
  $resultado=$con->prepare($sql);
  $resultado->bindParam(":fecha_vent",date('Y-m-d'));
  // $resultado->bindParam(":descr_vent",);
  $resultado->bindParam(":cog_sep",$id);
  $resultado->bindParam(":ced_com",$cedcomp);


  if($resultado->execute()){

    header('location:../vistas/sepulcros.php?msj=Sepulcro Vendido');

  }

 }else {

  header('location:../vistas/sepulcros.php?err=Error intentelo de nuevo');

 }

  

}else {

  header('location:../vistas/home.php?err=Hubo un error al insertar, vuelve a intentarlo');

}

}


?>