<?php 

include "../database/conexion.php";

$con=conectar();

$codigvent=$_POST['codig_vent'];
$fechavent=$_POST["fecha_vent"];
$descrvent=$_POST['descr_vent'];


$query=" INSERT INTO tabla_vent  (codig_vent,fecha_vent,descr_vent) VALUES (:codig_vent,:fecha_vent,:descr_vent)";

$result=$con->prepare($query);

$result->bindParam(":codig_vent",$codigvent);
$result->bindParam(":fecha_vent",$fechavent);
$result->bindParam(":descr_vent",$descrvent);

if($result->execute()){

  header('location:../vistas/comprador.php?exi=Insertado correctamente');

}else {

  header('location:../vistas/comprador.php?err=Hubo un error al insertar, vuelve a intentarlo');

}


?>




