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


$query="INSERT INTO tabla_comp  (cedul_comp,nombr_comp,apell_comp,celul_comp,telef_comp,correo_com,direcc_com) VALUES (:cedul_comp,:nombr_comp,:apell_comp,:celul_comp,:telef_comp,:correo_com,:direcc_com)";


$resultado=$con->prepare($query);

$resultado->bindParam(":cedul_comp",$cedcomp);
$resultado->bindParam(":nombr_comp",$nombcomp);
$resultado->bindParam(":apell_comp",$apellcomp);
$resultado->bindParam(":celul_comp",$celcomp);
$resultado->bindParam(":telef_comp",$telefcomp);
$resultado->bindParam(":correo_com",$correocomp);
$resultado->bindParam(":direcc_com",$direcccomp);


if($resultado->execute()){

  header('location:../vistas/home.php?exi=Insertado correctamente');

}else {

  header('location:../vistas/home.php?err=Hubo un error al insertar, vuelve a intentarlo');

}



?>